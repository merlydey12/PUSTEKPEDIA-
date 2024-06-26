<?php

use App\Http\Controller\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', fuction ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('Hi', fuction ($bot) {
    $bot->reply('Hello!');
});

$bobotman->hears('Start Conversation', BotManController::class.'@startConversation');