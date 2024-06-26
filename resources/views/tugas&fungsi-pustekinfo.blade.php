@extends('layouts.frontend.master')
@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Tugas & Fungsi </h1>
              <p class="mb-0">Berikut Merupakan Tugas & Fungsi Pustekinfo</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Tugas & Fungsi</li>
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
              <a href="sejarah-pustekinfo">Sejarah Pustekinfo</a>
              <a href="tugas&fungsi-pustekinfo" class="active">Tugas & Fungsi Pustekinfo</a>
            </div>

            <h4></h4>
            <p></p>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/berita4.png" alt="" class="img-fluid services-img">
            <h3>Tugas & Fungsi</h3>
            <p>
              Berdasarkan Peraturan Sekretaris Jenderal Nomor 6 tahun 2021 tentang Organisasi dan Tata Kerja Sekretariat Jenderal Dewan Perwakilan Rakyat Indonesia, Biro SDMA memiliki tugas pengelolaan manajemen sumber daya manusia Aparatur Sipil Negara dan Non Aparatur Sipil Negara di lingkungan Sekretariat Jenderal. Dalam pelaksanaan tugasnya, Biro SDMA menyelenggarakan fungsi:
            </p>
            <ul>
              <li><i class="bi bi-1-circle"></i> <span>Penyusunan dan evaluasi rencana, program, dan anggaran di lingkungan Biro Sumber Daya Manusia Aparatur</span></li>
              <li><i class="bi bi-2-circle"></i> <span>Penyiapan bahan penyusunan kebijakan teknis di bidang manajemen sumber daya manusia</span></li>
              <li><i class="bi bi-3-circle"></i> <span>pengelolaan perencanaan dan pola karier Aparatur Sipil Negara</span></li>
              <li><i class="bi bi-4-circle"></i> <span>Pengelolaan manajemen kinerja dan informasi Aparatur Sipil Negara</span></li>
              <li><i class="bi bi-5-circle"></i> <span>Pengelolaan manajemen sumber daya manusia non Aparatur Sipil Negara</span></li>
              <li><i class="bi bi-6-circle"></i> <span>Pelaksanaan pembinaan jabatan fungsional</span></li>
              <li><i class="bi bi-7-circle"></i> <span>Dukungan pelaksanaan pengelolaan jabatan fungsioanal di bidang sumber daya manusia</span></li>
              <li><i class="bi bi-8-circle"></i> <span>Penyusunan laporan kinerja Biro Sumber Daya Manusia aparatur</span></li>
              <li><i class="bi bi-9-circle"></i> <span>Pelaporan pelaksanaan tugas dan fungsi kepada Deputi Bidang Administrasi</span></li>
            </ul>
           
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

  </main>

@stop