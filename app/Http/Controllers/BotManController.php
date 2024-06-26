<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use Illuminate\Http\Request;

class BotManController extends Controller
{
    public function handle()
    {
        ('Handle method called');

        $botman = app('botman');

        // Greet and ask for name
        $botman->hears('hello', function ($botman) {
            ('Bot heard "hello"');
            $this->askName($botman);
        });

        // Fallback for unrecognized messages
        $botman->fallback(function ($botman) {
            ('Fallback triggered');
            $botman->reply("Hi! I'm still under development. How can I help you?");
        });

        $botman->listen();
    }

    public function askName($botman)
    {
        ('askName method called');
        
        $botman->ask("Hi! What's your name?", function (Answer $answer) use ($botman) {
            $name = $answer->getText();
            ('User name received: ' . $name);

            if (empty($name)) {
                ('Name is empty');
                $botman->reply("Oops, I didn't catch that. Could you please tell me your name?");
                return;
            }

            $botman->reply("Nice to meet you, " . $name . "!");

            $question = Question::create('What would you like to do?')
                ->addButtons([
                    Button::create('Learn about me')->value('about_me'),
                    Button::create('Ask a question')->value('ask_question'),
                    Button::create('Something else')->value('other'),
                ]);

            ('Asking user what they would like to do');
            $botman->ask($question, function (Answer $answer) use ($botman) {
                $choice = $answer->getValue();
                ('User choice received: ' . $choice);
                $this->handleChoice($botman, $choice);
            });
        });
    }

    public function handleChoice($botman, $choice)
    {
        ('handleChoice method called with choice: ' . $choice);

        switch ($choice) {
            case 'about_me':
            ('User chose "about_me"');
                $botman->reply("I'm a friendly bot still under development. I'm here to help you with various tasks!");
                break;
            case 'ask_question':
                ('User chose "ask_question"');
                $botman->ask("What would you like to know?", function (Answer $answer) use ($botman) {
                    $question = $answer->getText();
                    ('User question: ' . $question);
                    $botman->reply("You asked: " . $question);
                });
                break;
            case 'other':
                ('User chose "other"');
                $botman->reply("Tell me what you'd like to do!");
                break;
            default:
                ('User choice was not understood');
                $botman->reply("I didn't understand that. Please choose from the list.");
        }
    }
}
