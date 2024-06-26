@extends('layouts.frontend.master')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Dashboard SDM PUSTEKINFO</h1>
              <p class="mb-0">Selamat datang di dashboard SDM PUSTEKINFO</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Dashboard</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- embeed dashboard Section -->

    <div class="iframe-container">

      <iframe width="1420" height="1000" src="https://lookerstudio.google.com/embed/reporting/430514c9-00b2-4b47-80e3-c4ea65fd23f6/page/RRI1D" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
      </div>
      
      <br>
      <br>
      <br>
      <br>
      <br>
  <!-- /embeed dashboard Section -->

  </main>

  @stop