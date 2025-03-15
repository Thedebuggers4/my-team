<?php 
$this->load->view('siswa/head');
?>

<!--tambahkan custom css disini-->
<style>
  /* Responsif untuk dashboard cards */
  .small-box {
    position: relative;
    border-radius: 8px;
    overflow: hidden;
    margin-bottom: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }
  
  .small-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
  }
  
  .small-box .inner {
    padding: 20px;
  }
  
  .small-box .inner h3 {
    font-size: 28px;
    font-weight: 600;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  .small-box .inner p {
    font-size: 14px;
    margin-top: 5px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  .small-box .icon {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 60px;
    color: rgba(255, 255, 255, 0.2);
    transition: all 0.3s ease;
  }
  
  .small-box:hover .icon {
    font-size: 65px;
  }
  
  .small-box .small-box-footer {
    background: rgba(0, 0, 0, 0.1);
    color: #fff;
    display: block;
    padding: 10px 0;
    text-align: center;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.3s ease;
  }
  
  .small-box .small-box-footer:hover {
    background: rgba(0, 0, 0, 0.2);
  }
  
  /* Media queries untuk tampilan mobile */
  @media (max-width: 767px) {
    .small-box .inner h3 {
      font-size: 22px;
    }
    
    .small-box .inner p {
      font-size: 12px;
    }
    
    .small-box .icon {
      font-size: 40px;
      top: 10px;
      right: 10px;
    }
    
    .small-box:hover .icon {
      font-size: 45px;
    }
    
    .small-box .small-box-footer {
      font-size: 12px;
      padding: 8px 0;
    }
  }
  
  /* Media queries untuk perangkat sangat kecil */
  @media (max-width: 380px) {
    .small-box .inner h3 {
      font-size: 18px;
    }
    
    .small-box .inner p {
      font-size: 11px;
    }
    
    .small-box .icon {
      font-size: 35px;
    }
  }
</style>

<?php
$this->load->view('siswa/topbar');
$this->load->view('siswa/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="animate__animated animate__fadeInDown">
    Dashboard Siswa
    <small>Panel Kontrol</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home_siswa') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Welcome Message -->
  <div class="callout callout-info animate__animated animate__fadeIn" data-aos="fade-up">
    <h4><i class="fa fa-user-circle"></i> Selamat Datang, <?php echo $this->session->userdata('nama');?></h4>
    <p>Semoga sukses dalam ujian Anda! Sistem akan membantu Anda mengelola ujian dengan mudah dan efektif.</p>
  </div>

  <!-- Statistics Row -->
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="100">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>Jadwal</h3>
          <p>Jadwal Ujian</p>
        </div>
        <div class="icon">
          <i class="fa fa-calendar"></i>
        </div>
        <a href="<?php echo base_url('jadwal_ujian')?>" class="small-box-footer">Lihat Jadwal <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="200">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>Hasil</h3>
          <p>Hasil Ujian</p>
        </div>
        <div class="icon">
          <i class="fa fa-check-square-o"></i>
        </div>
        <a href="<?php echo base_url('ruang_hasil')?>" class="small-box-footer">Lihat Hasil <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="300">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>Profil</h3>
          <p>Informasi Akun</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="#" class="small-box-footer">Detail Akun <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="400">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>Pengaturan</h3>
          <p>Keamanan Akun</p>
        </div>
        <div class="icon">
          <i class="fa fa-lock"></i>
        </div>
        <a href="<?php echo base_url('password')?>" class="small-box-footer">Ganti Password <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Panduan Penggunaan -->
    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-info-circle"></i> Petunjuk Penggunaan Ujian Online</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#jadwal" data-toggle="tab"><i class="fa fa-calendar"></i> Jadwal Ujian</a></li>
              <li><a href="#hasil" data-toggle="tab"><i class="fa fa-check-square-o"></i> Hasil Ujian</a></li>
              <li><a href="#password" data-toggle="tab"><i class="fa fa-lock"></i> Ganti Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="jadwal">
                <div class="pad">
                  <p>Di menu <b>Jadwal Ujian</b>, Anda dapat melihat jadwal ujian yang telah didaftarkan oleh administrator sebagai peserta ujian.</p>
                  <p>Jika tidak ada jadwal ujian yang tersedia, silahkan hubungi administrator untuk informasi lebih lanjut.</p>
                  <p>Ketika waktu ujian telah tiba, klik tombol <span class="label label-success">Mulai</span> untuk memulai ujian Anda.</p>
                </div>
              </div>
              <div class="tab-pane" id="hasil">
                <div class="pad">
                  <p>Di menu <b>Hasil Ujian</b>, Anda dapat melihat secara langsung hasil ujian yang telah Anda lakukan.</p>
                  <p>Perhatikan nilai dan detail lainnya untuk mengevaluasi hasil belajar Anda.</p>
                </div>
              </div>
              <div class="tab-pane" id="password">
                <div class="pad">
                  <p>Di menu <b>Ganti Password</b>, Anda dapat mengubah password sesuai keinginan setelah mendapatkan password default dari administrator.</p>
                  <p>Jika lupa password, hubungi administrator untuk mendapatkan password baru.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Info -->
    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
      <!-- Calendar Box -->
      <div class="box box-solid bg-blue-gradient">
        <div class="box-header">
          <i class="fa fa-calendar"></i>
          <h3 class="box-title">Kalender</h3>
        </div>
        <div class="box-body no-padding">
          <div id="calendar" style="width: 100%"></div>
        </div>
      </div>

      <!-- Tips Box -->
      <div class="box box-solid box-warning">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-lightbulb-o"></i> Tips Ujian</h3>
        </div>
        <div class="box-body">
          <ul class="list-unstyled">
            <li><i class="fa fa-check text-success"></i> Pastikan koneksi internet stabil</li>
            <li><i class="fa fa-check text-success"></i> Jangan refresh halaman saat ujian</li>
            <li><i class="fa fa-check text-success"></i> Perhatikan sisa waktu ujian</li>
            <li><i class="fa fa-check text-success"></i> Jawab soal yang mudah terlebih dahulu</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('siswa/js');
?>

<!--tambahkan custom js disini-->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  $(function(){
    $('#data-tables').dataTable();
    
    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true
    });
    
    // Initialize Calendar
    $('#calendar').datepicker({
      todayHighlight: true,
      autoclose: true
    });
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>


<?php
$this->load->view('admin/foot');
?>

