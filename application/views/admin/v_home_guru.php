<?php 
$this->load->view('admin/head');
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
  
  /* Feature list style */
  .feature-list {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  
  .feature-list li {
    position: relative;
    padding: 15px;
    margin-bottom: 10px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    border-left: 4px solid #3c8dbc;
  }
  
  .feature-list li:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .feature-list li h4 {
    margin-top: 0;
    font-weight: 600;
    color: #3c8dbc;
  }
  
  .feature-list li p {
    margin-bottom: 0;
    color: #555;
  }
  
  .feature-icon {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    background-color: #3c8dbc;
    color: white;
    border-radius: 50%;
    margin-right: 10px;
    float: left;
  }
  
  .feature-content {
    margin-left: 55px;
  }
  
  /* Welcome panel */
  .welcome-panel {
    background: linear-gradient(120deg, #3c8dbc, #367fa9);
    color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .welcome-panel h2 {
    font-weight: 600;
    margin-top: 0;
  }
  
  .welcome-panel p {
    opacity: 0.9;
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
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="animate__animated animate__fadeInDown">
    Dashboard Guru
    <small>Panel Kontrol</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <!-- Welcome Message -->
  <div class="welcome-panel animate__animated animate__fadeIn" data-aos="fade-up">
    <div class="row">
      <div class="col-md-8">
        <h2><i class="fa fa-user-circle"></i> Selamat Datang, <?= $this->session->userdata('nama');?></h2>
        <p>Selamat datang di sistem ujian online. Anda dapat mengelola soal-soal ujian dan mengontrol proses ujian dari sini.</p>
      </div>
      <div class="col-md-4 text-right">
        <div class="hidden-xs">
          <i class="fa fa-graduation-cap" style="font-size: 80px; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </div>

  <!-- Statistics Row -->
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
      <div class="small-box bg-blue">
        <div class="inner">
          <h3>Soal Ujian</h3>
          <p>Kelola Soal Ujian</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="<?= base_url('soal_ujian')?>" class="small-box-footer">Kelola Soal <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
      <div class="small-box bg-purple">
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
    
    <div class="col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="300">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>Keamanan</h3>
          <p>Ganti Password</p>
        </div>
        <div class="icon">
          <i class="fa fa-lock"></i>
        </div>
        <a href="<?= base_url('password')?>" class="small-box-footer">Ganti Password <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>

  <div class="row">
    <!-- Panduan Penggunaan -->
    <div class="col-md-8" data-aos="fade-up" data-aos-delay="200">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-info-circle"></i> Petunjuk Penggunaan Sistem</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#soal" data-toggle="tab"><i class="fa fa-book"></i> Kelola Soal</a></li>
              <li><a href="#password" data-toggle="tab"><i class="fa fa-lock"></i> Ganti Password</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="soal">
                <div class="pad">
                  <p>Di menu <b>Kelola Soal Ujian</b>, Anda dapat melakukan berbagai aktivitas terkait soal ujian:</p>
                  <ul>
                    <li>Melihat daftar soal ujian yang telah dibuat</li>
                    <li>Memfilter mata pelajaran sesuai dengan kebutuhan</li>
                    <li>Menambah, mengubah, dan menghapus soal ujian</li>
                    <li>Menambah data pelajaran sesuai mata pelajaran Anda</li>
                  </ul>
                </div>
              </div>
              <div class="tab-pane" id="password">
                <div class="pad">
                  <p>Di menu <b>Ganti Password</b>, Anda dapat:</p>
                  <ul>
                    <li>Mengubah password default dari administrator</li>
                    <li>Menyesuaikan password sesuai keinginan Anda</li>
                    <li>Jika lupa password, hubungi administrator untuk mendapatkan password terbaru</li>
                  </ul>
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
      <div class="box box-primary" data-aos="fade-up" data-aos-delay="400">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-lightbulb-o"></i> Tips Pengajar</h3>
        </div>
        <div class="box-body">
          <ul class="feature-list">
            <li>
              <div class="feature-icon">
                <i class="fa fa-check"></i>
              </div>
              <div class="feature-content">
                <h4>Soal Berkualitas</h4>
                <p>Buatlah soal yang jelas dan mudah dipahami siswa.</p>
              </div>
            </li>
            <li>
              <div class="feature-icon">
                <i class="fa fa-clock-o"></i>
              </div>
              <div class="feature-content">
                <h4>Waktu Tepat</h4>
                <p>Atur waktu ujian yang sesuai dengan tingkat kesulitan soal.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</section><!-- /.content -->
  
<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript">
  $(function() {
    // Initialize calendar
    $('#calendar').datepicker({
      todayHighlight: true,
      language: 'id'
    });
    
    // Initialize datatables
    $('#data-tables').dataTable();
  });
  
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>

