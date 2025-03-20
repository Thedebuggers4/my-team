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
    border-left: 4px solid #dd4b39;
  }
  
  .feature-list li:hover {
    transform: translateX(5px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .feature-list li h4 {
    margin-top: 0;
    font-weight: 600;
    color: #dd4b39;
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
    background-color: #dd4b39;
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
    background: linear-gradient(120deg, #dd4b39, #d73925);
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
  
  /* Info boxes */
  .info-box {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    min-height: 90px;
    background: #fff;
    width: 100%;
    transition: all 0.3s ease;
  }
  
  .info-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
  }
  
  .info-box-icon {
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
    display: block;
    float: left;
    height: 90px;
    width: 90px;
    text-align: center;
    font-size: 45px;
    line-height: 90px;
    background: rgba(0, 0, 0, 0.2);
  }
  
  .info-box-content {
    padding: 15px 10px;
    margin-left: 90px;
  }
  
  .info-box-text {
    display: block;
    font-size: 14px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    text-transform: uppercase;
  }
  
  .info-box-number {
    display: block;
    font-weight: bold;
    font-size: 24px;
    margin-top: 5px;
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
  <h1 class="page-title animate__animated animate__fadeInDown">
    Dashboard Administrator
    <small class="page-subtitle">Panel Kontrol Sistem</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">

    <!-- Welcome Message -->
    <div class="welcome-panel" data-aos="fade-up">
        <div class="row">
            <div class="col-md-8">
                <h2><i class="fa fa-user-circle"></i> Selamat Datang, <?php echo $this->session->userdata('nama');?></h2>
                <p>Selamat datang di sistem manajemen ujian online. Anda dapat mengelola data guru, siswa, soal ujian, peserta ujian, dan melihat hasil ujian dari panel ini.</p>
            </div>
            <div class="col-md-4 text-right">
                <div class="hidden-xs">
                    <i class="fa fa-cogs" style="font-size: 80px; opacity: 0.3;"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Row -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="100">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>Guru</h3>
                    <p>Kelola Data Guru</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="<?= base_url('guru')?>" class="small-box-footer">Data Guru <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="200">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>Siswa</h3>
                    <p>Kelola Data Siswa</p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap"></i>
                </div>
                <a href="<?= base_url('siswa')?>" class="small-box-footer">Data Siswa <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="300">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>Soal</h3>
                    <p>Kelola Soal Ujian</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="<?= base_url('soal_ujian')?>" class="small-box-footer">Soal Ujian <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="400">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>Hasil</h3>
                    <p>Lihat Hasil Ujian</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <a href="<?= base_url('hasil_ujian')?>" class="small-box-footer">Hasil Ujian <i class="fa fa-arrow-circle-right"></i></a>
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
                            <li class="active"><a href="#guru" data-toggle="tab"><i class="fa fa-users"></i> Data Guru</a></li>
                            <li><a href="#siswa" data-toggle="tab"><i class="fa fa-graduation-cap"></i> Data Siswa</a></li>
                            <li><a href="#soal" data-toggle="tab"><i class="fa fa-book"></i> Soal Ujian</a></li>
                            <li><a href="#peserta" data-toggle="tab"><i class="fa fa-user"></i> Peserta Ujian</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="guru">
                                <div class="pad">
                                    <p>Di menu <b>Data Guru</b>, Anda dapat melakukan:</p>
                                    <ul>
                                        <li>Melihat daftar guru yang terdaftar di sistem</li>
                                        <li>Menambahkan data guru baru</li>
                                        <li>Mengubah data guru yang sudah ada</li>
                                        <li>Menghapus data guru</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="siswa">
                                <div class="pad">
                                    <p>Di menu <b>Data Siswa</b>, Anda dapat melakukan:</p>
                                    <ul>
                                        <li>Melihat daftar siswa yang terdaftar di sistem</li>
                                        <li>Menambahkan data siswa baru</li>
                                        <li>Mengubah data siswa yang sudah ada</li>
                                        <li>Menghapus data siswa</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="soal">
                                <div class="pad">
                                    <p>Di menu <b>Kelola Soal Ujian</b>, Anda dapat melakukan:</p>
                                    <ul>
                                        <li>Melihat daftar soal ujian yang tersedia</li>
                                        <li>Menambah soal ujian baru</li>
                                        <li>Mengubah soal ujian yang sudah ada</li>
                                        <li>Menghapus soal ujian</li>
                                        <li>Mengelola mata pelajaran</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane" id="peserta">
                                <div class="pad">
                                    <p>Di menu <b>Kelola Peserta Ujian</b>, Anda dapat melakukan:</p>
                                    <ul>
                                        <li>Melihat daftar peserta ujian</li>
                                        <li>Mendaftarkan siswa sebagai peserta ujian</li>
                                        <li>Mengatur jadwal dan mata pelajaran ujian</li>
                                        <li>Menghapus data peserta ujian</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fitur Panel -->
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <!-- Calendar Box -->
            <div class="box box-solid bg-red-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>
                    <h3 class="box-title">Kalender</h3>
                </div>
                <div class="box-body no-padding">
                    <div id="calendar" style="width: 100%"></div>
                </div>
            </div>

            <!-- Features Box -->
            <div class="box box-primary" data-aos="fade-up" data-aos-delay="400">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-check-square-o"></i> Fitur Utama</h3>
                </div>
                <div class="box-body">
                    <ul class="feature-list">
                        <li>
                            <div class="feature-icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Pengelolaan Pengguna</h4>
                                <p>Kelola data guru dan siswa dengan mudah</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon">
                                <i class="fa fa-question-circle"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Bank Soal</h4>
                                <p>Kelola berbagai tipe soal ujian</p>
                            </div>
                        </li>
                        <li>
                            <div class="feature-icon">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <div class="feature-content">
                                <h4>Administrasi Ujian</h4>
                                <p>Atur peserta, jadwal, dan pengawasan ujian</p>
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

