@extends('layouts.frontend.master')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Dashboard Anggota DPR RI</h1>
              <p class="mb-0">Selamat datang di dashboard anggota DPR RI.</p>
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

      <iframe width="1420" height="1000" src="https://lookerstudio.google.com/embed/reporting/0d9439d6-81bd-4806-b2c1-efe322f3d858/page/gSI1D" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
      </div>

  <!-- /embeed dashboard Section -->
  </main>

  @stop