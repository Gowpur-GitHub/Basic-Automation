@extends('dashboard.layouts.main')

@section('container')

<style>

  .justified-text {
      text-align: justify;
      font-size: 16px; 
      line-height: 1.7; 
      color: black; 
    }

  .justified-tittle { 
      color: black; 
    }

</style>

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
      <div class="col-lg-6">
        <div class="card text-bg-light mb-4">
          <div class="card-body">
            <h5 class="card-title">Weighted Product (WP)</h5>
            <p class="justified-text">
              Sistem pendukung keputusan pemilihan laptop ini dibuat berdasarkan metode Weighted Product (WP), 
              merupakan suatu sistem yang diharapkan bisa membantu pengguna dalam memilih 
              laptop yang sesuai dengan kebutuhan dan preferensi mereka. Melalui penerapan kriteria dan analisis data, 
              sistem ini memberikan rekomendasi laptop berdasarkan faktor-faktor seperti Harga, RAM, SSD, 
              Processor, VGA, dan Display Panel. Dengan adanya sistem ini, pengguna dapat 
              mengoptimalkan waktu mereka dan mendapatkan rekomendasi yang objektif sesuai dengan kebutuhan 
              spesifik yang mereka cari pada laptop yang dimasukkan nantinya ke sistem.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-chart-pie me-1"></i>
            Pie Chart Perbandingan nilai bobot setiap kriteria
          </div>
          <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
          <div class="card-footer small text-muted">{{ $formattedUpdatedAtKriteria }}</div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-chart-bar me-1"></i>
        Bar Chart Perbandingan setiap monitor
      </div>
      <div class="card-body"><canvas id="myBarChart" width="100%" height="35"></canvas></div>
      <div class="card-footer small text-muted">{{ $formattedUpdatedAt }}
      </div>
    </div>
    
    <br><br>
  </div>
</main>

<script>
  let dataKriteriaNama = @json($dataKriteriaNama);
  let dataKriteriaBobot = @json($dataKriteriaBobot);
  let dataNilaiV = @json($dataNilaiV);
  let dataNamaAlternatif = @json($dataNamaAlternatif); 
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="js/chart-bar-demo.js"></script>
<script src="js/chart-pie-demo.js"></script>
@endsection