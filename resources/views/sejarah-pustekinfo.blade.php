@extends('layouts.frontend.master')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Sejarah Pustekinfo</h1>
              <p class="mb-0">Berikut Sedikit Literasi Tentang Sejarah Pustekinfo</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Sejarah Pustekinfo</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="tentang-pustekinfo">Tentang Pustekinfo</a>
              <a href="visi&misi">Visi & Misi Pustekinfo</a>
              <a href="sejarah-pustekinfo"class="active">Sejarah Pustekinfo</a>
              <a href="tugas&fungsi-pustekinfo">Tugas & Fungsi Pustekinfo</a>
            </div>

            <h4></h4>
            <p></p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/berita2.png" alt="" class="img-fluid services-img">
            <h3>Sejarah Pustekinfo</h3>
            <p>
              2018 “Pustekinfo dibentuk”
              Peraturan Sekretaris Jenderal Dewan Perwakilan Rakyat Republik Indonesia Nomor 6 Tahun 2021 tentang Organisasi dan Tata Kerja. Peraturaan tersebut menjadi dasar bagi terbentuknya struktur organisasi baru di lingkungan Sekretariat Jenderal Dewan Perwakilan Rakyat Republik Indonesia (Setjen DPR RI). 
            </p>
            <p>
              Salah satu dampaknya adalah keberadaan Badan Keahlian yang statusnya menjadi di bawah Sekretaris Jenderal dan terbentuknya beberapa unit kerja baru seperti Biro Organisasi dan Perencanaan.
            </p>

          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@stop