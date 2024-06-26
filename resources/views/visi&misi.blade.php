@extends('layouts.frontend.master')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Visi & Misi </h1>
              <p class="mb-0">Berikut Merupakan Visi & Misi Pustekinfo</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Visi & Misi</li>
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
              <a href="tentang-pustekinfo" >Tentang Pustekinfo</a>
              <a href="visi&misi" class="active">Visi & Misi Pustekinfo</a>
              <a href="sejarah-pustekinfo">Sejarah Pustekinfo</a>
              <a href="tugas&fungsi-pustekinfo">Tugas & Fungsi Pustekinfo</a>
            </div>

            <h4></h4>
            <p></p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/berita1.png" alt="" class="img-fluid services-img">
            <h3>Visi</h3>
            <p>
              “Pusat Pembentuk Sumber Daya Manusia Sekretariat Jenderal DPR RI yang unggul dan kompeten dalam memberikan dukungan teknis, persidangan dan keahlian”
            </p>
            <h3>Misi</h3>
            <ul>
              <li><i class="bi bi-1-circle"></i> <span>Pusat Pembentuk Sumber Daya Manusia Sekretariat Jenderal DPR RI yang unggul dan kompeten dalam memberikan dukungan teknis, persidangan dan keahlian</span></li>
              <li><i class="bi bi-2-circle"></i> <span>Mewujudkan kelembagaan Pusat Pendidikan dan Pelatihan Sekretariat Jenderal DPR RI yang fungsional, kredibel, dan imparsial.</span></li>
            </ul>

          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@stop