@extends('layouts.frontend.master')
@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Dashboard Pengguna Layanan TI</h1>
              <p class="mb-0">Selamat datang di dashboard pengguna layanan TI </p>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #chartContainer {
            width: 500px; /* Set your desired width */
            height: 500px; /* Set your desired height */
            margin: auto;
        }
    </style>

<div id="chartContainer">
  <canvas id="doughnutChart" width="500" height="500"></canvas>
</div>

<script>
  var ctx = document.getElementById('doughnutChart').getContext('2d');
  var doughnutChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: ['Anggota DPR RI', 'Staff Anggota', 'Pers Jurnalis', 'Tenaga Ahli', 'Pegawai Setjen'],
          datasets: [{
              label: 'Jumlah',
              data: [575, 1150, 400, 4340, 2777],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)'
              ],
              borderColor: [
                  'rgba(255, 99, 132, 1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
              legend: {
                  position: 'top',
              },
              tooltip: {
                  callbacks: {
                      label: function(context) {
                          let label = context.label || '';
                          if (label) {
                              label += ': ';
                          }
                          if (context.raw !== null) {
                              label += context.raw;
                          }
                          return label;
                      }
                  }
              }
          }
      }
  });
</script>

  </main>

  @stop