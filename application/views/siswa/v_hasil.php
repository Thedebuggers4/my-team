<?php 
$this->load->view('siswa/head');
?>

<!--tambahkan custom css disini-->
<style>
  .hasil-header {
    background: linear-gradient(120deg, #9b59b6, #8e44ad);
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .hasil-title {
    font-size: 24px;
    margin: 0;
    font-weight: 600;
  }
  .hasil-subtitle {
    font-size: 14px;
    opacity: 0.8;
    margin-top: 5px;
  }
  .table-responsive {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 30px;
  }
  .table-hasil {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
  }
  .table-hasil thead th {
    background: #f8f9fa;
    padding: 15px 10px;
    color: #2c3e50;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    border: none;
    border-bottom: 2px solid #eee;
    text-align: center;
  }
  .table-hasil tbody td {
    padding: 15px 10px;
    border: none;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
    text-align: center;
  }
  .table-hasil tbody tr:hover {
    background-color: #f9f9f9;
    transition: all 0.3s ease;
  }
  .status-badge {
    padding: 8px 15px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
  }
  .status-pending {
    background-color: #f1c40f;
    color: #fff;
  }
  .nilai-box {
    font-weight: 700;
    font-size: 16px;
    color: #fff;
    background: linear-gradient(45deg, #3498db, #2980b9);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 3px 10px rgba(52, 152, 219, 0.3);
  }
  .nilai-a {
    background: linear-gradient(45deg, #2ecc71, #27ae60);
  }
  .nilai-b {
    background: linear-gradient(45deg, #3498db, #2980b9);
  }
  .nilai-c {
    background: linear-gradient(45deg, #f39c12, #f1c40f);
  }
  .nilai-d {
    background: linear-gradient(45deg, #e74c3c, #c0392b);
  }
  .mata-pelajaran {
    font-weight: 600;
    color: #3498db;
  }
  .tanggal-ujian {
    color: #e74c3c;
    font-weight: 500;
  }
  .hasil-belum {
    background-color: #f1c40f;
    border: none;
    color: white;
    padding: 8px 10px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 11px;
  }
  .hasil-nilai {
    font-weight: 600;
    font-size: 14px;
  }
  .benar-count {
    color: #2ecc71;
    font-weight: 600;
  }
  .salah-count {
    color: #e74c3c;
    font-weight: 600;
  }
  
  /* Stats Card */
  .stats-container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-bottom: 20px;
  }
  .stat-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    flex: 1;
    margin: 0 10px;
    min-width: 200px;
    display: flex;
    align-items: center;
  }
  .stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 20px;
  }
  .stat-icon.avg {
    color: #3498db;
    background: rgba(52, 152, 219, 0.1);
  }
  .stat-icon.max {
    color: #2ecc71;
    background: rgba(46, 204, 113, 0.1);
  }
  .stat-icon.min {
    color: #e74c3c;
    background: rgba(231, 76, 60, 0.1);
  }
  .stat-icon.total {
    color: #9b59b6;
    background: rgba(155, 89, 182, 0.1);
  }
  .stat-content h4 {
    font-size: 22px;
    font-weight: 700;
    margin: 0;
    line-height: 1;
    color: #2c3e50;
  }
  .stat-content p {
    margin: 5px 0 0;
    color: #7f8c8d;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  /* Styling untuk mobile card view */
  .mobile-card {
    background: white;
    border-radius: 10px;
    margin-bottom: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    overflow: hidden;
  }
  
  .mobile-card .card-header {
    padding: 15px;
    border-bottom: 1px solid #f1f1f1;
    background-color: #f8f9fa;
  }
  
  .mobile-card .card-title {
    margin: 0;
    font-weight: 600;
    color: #9b59b6;
    font-size: 16px;
  }
  
  .mobile-card .card-body {
    padding: 15px;
  }
  
  .mobile-card .card-info {
    margin-bottom: 15px;
  }
  
  .mobile-card .card-info p {
    margin: 8px 0;
    font-size: 13px;
    color: #7f8c8d;
  }
  
  .mobile-card .card-info p i {
    width: 20px;
    text-align: center;
    margin-right: 5px;
    color: #9b59b6;
  }
  
  .mobile-card .card-result {
    display: flex;
    justify-content: space-between;
    margin-top: 15px;
    padding-top: 15px;
    border-top: 1px solid #f1f1f1;
  }
  
  .mobile-card .result-item {
    text-align: center;
    padding: 0 10px;
    flex: 1;
  }
  
  .mobile-card .result-item:not(:last-child) {
    border-right: 1px solid #f1f1f1;
  }
  
  .mobile-card .result-label {
    font-size: 12px;
    color: #95a5a6;
    margin-bottom: 5px;
    text-transform: uppercase;
  }
  
  .mobile-card .result-value.benar {
    color: #2ecc71;
    font-weight: 600;
    font-size: 15px;
  }
  
  .mobile-card .result-value.salah {
    color: #e74c3c;
    font-weight: 600;
    font-size: 15px;
  }
  
  .mobile-card .nilai-mobile {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 700;
    font-size: 18px;
  }
  
  /* Sembunyikan/Tampilkan berdasarkan ukuran layar */
  @media (max-width: 768px) {
    .desktop-view {
      display: none !important;
    }
    
    .mobile-view {
      display: block !important;
    }
    
    /* Membuat stats container fullwidth pada mobile */
    .stats-container {
      flex-direction: row;
      flex-wrap: wrap;
    }
    
    .stat-card {
      flex: 1 0 calc(50% - 10px);
      margin: 5px;
      min-width: auto;
    }
    
    .stat-icon {
      width: 40px;
      height: 40px;
      font-size: 16px;
    }
    
    .stat-content h4 {
      font-size: 18px;
    }
    
    .stat-content p {
      font-size: 10px;
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
    Hasil Ujian
    <small>Rekap Nilai Ujian</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home_siswa') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Hasil Ujian</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <!-- Header Info -->
    <div class="hasil-header" data-aos="fade-down">
        <div class="row">
            <div class="col-md-8">
                <h3 class="hasil-title"><i class="fa fa-trophy"></i> Hasil Ujian</h3>
                <p class="hasil-subtitle">Lihat dan analisa hasil ujian yang telah Anda ikuti.</p>
            </div>
            <div class="col-md-4 text-right">
                <a href="<?php echo base_url('jadwal_ujian')?>" class="btn btn-primary" data-aos="fade-left" data-toggle="tooltip" title="Kembali ke jadwal ujian">
                  <i class="fa fa-calendar"></i> Jadwal Ujian
                </a>
            </div>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-container" data-aos="fade-up">
        <?php
        $total_nilai = 0;
        $total_ujian = 0;
        $max_nilai = 0;
        $min_nilai = 100;
        
        foreach($hasil as $d) {
            if($d->nilai != '') {
                $total_nilai += $d->nilai;
                $total_ujian++;
                
                if($d->nilai > $max_nilai) {
                    $max_nilai = $d->nilai;
                }
                
                if($d->nilai < $min_nilai) {
                    $min_nilai = $d->nilai;
                }
            }
        }
        
        $rata_nilai = ($total_ujian > 0) ? round($total_nilai / $total_ujian, 1) : 0;
        $min_nilai = ($min_nilai == 100 && $total_ujian == 0) ? 0 : $min_nilai;
        ?>
        
        <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
            <div class="stat-icon avg">
                <i class="fa fa-bar-chart"></i>
            </div>
            <div class="stat-content">
                <h4><?php echo $rata_nilai; ?></h4>
                <p>Rata-rata Nilai</p>
            </div>
        </div>
        
        <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
            <div class="stat-icon max">
                <i class="fa fa-arrow-up"></i>
            </div>
            <div class="stat-content">
                <h4><?php echo $max_nilai; ?></h4>
                <p>Nilai Tertinggi</p>
            </div>
        </div>
        
        <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
            <div class="stat-icon min">
                <i class="fa fa-arrow-down"></i>
            </div>
            <div class="stat-content">
                <h4><?php echo $min_nilai; ?></h4>
                <p>Nilai Terendah</p>
            </div>
        </div>
        
        <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
            <div class="stat-icon total">
                <i class="fa fa-file-text-o"></i>
            </div>
            <div class="stat-content">
                <h4><?php echo $total_ujian; ?></h4>
                <p>Total Ujian</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <!-- Default box -->
            <div class="box" data-aos="fade-up" data-aos-delay="200">
                <div class="box-body">
                    <!-- Tampilan desktop - Table -->
                    <div class="table-responsive desktop-view">
                        <table id="data" class="table table-hasil">                    
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th>Mata Pelajaran</th>                            
                                    <th>Tanggal Ujian</th>                            
                                    <th>Jam</th>                            
                                    <th>Benar</th>                            
                                    <th>Salah</th>                            
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                foreach($hasil as $d) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>                              
                                        <td class="mata-pelajaran"><?php echo $d->nama_matapelajaran; ?></td>                                
                                        <td class="tanggal-ujian"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y',strtotime($d->tanggal_ujian)); ?></td>                               
                                        <td><i class="fa fa-clock-o"></i> <?php echo date('H:i:s',strtotime($d->jam_ujian)); ?></td>                                
                                        <td>
                                            <?php
                                            if($d->benar == ''){
                                                echo "<span class='hasil-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                            }else {
                                                echo "<span class='benar-count'><i class='fa fa-check'></i> ".$d->benar."</span>";
                                            }
                                            ?>
                                        </td>                                
                                        <td>
                                            <?php
                                            if($d->salah == ''){
                                                echo "<span class='hasil-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                            }else {
                                                echo "<span class='salah-count'><i class='fa fa-times'></i> ".$d->salah."</span>";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if($d->nilai == ''){
                                                echo "<span class='hasil-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                            }else {
                                                $nilai_class = '';
                                                if($d->nilai >= 85) {
                                                    $nilai_class = 'nilai-a';
                                                } else if($d->nilai >= 70) {
                                                    $nilai_class = 'nilai-b';
                                                } else if($d->nilai >= 55) {
                                                    $nilai_class = 'nilai-c';
                                                } else {
                                                    $nilai_class = 'nilai-d';
                                                }
                                                echo "<div class='nilai-box ".$nilai_class."'>".$d->nilai."</div>";
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                <?php } ?>                  
                            </tbody> 
                        </table>
                    </div>
                    
                    <!-- Tampilan mobile - Cards -->
                    <div class="mobile-view" style="display: none;">
                        <div class="mobile-cards-container">
                            <?php
                            $delay = 50;
                            foreach($hasil as $d): ?>
                                <div class="mobile-card" data-aos="fade-up" data-aos-delay="<?= $delay += 50 ?>">
                                    <div class="card-header">
                                        <h4 class="card-title"><?= $d->nama_matapelajaran ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-info">
                                            <p><i class="fa fa-calendar"></i> Tanggal: <?= date('d M Y', strtotime($d->tanggal_ujian)) ?></p>
                                            <p><i class="fa fa-clock-o"></i> Jam: <?= date('H:i:s', strtotime($d->jam_ujian)) ?></p>
                                        </div>
                                        
                                        <?php if($d->nilai == ''): ?>
                                            <div style="text-align: center; padding: 15px 0;">
                                                <span class="hasil-belum"><i class="fa fa-hourglass-half"></i> Belum Mengikuti Ujian</span>
                                            </div>
                                        <?php else: ?>
                                            <div class="card-result">
                                                <div class="result-item">
                                                    <div class="result-label">Benar</div>
                                                    <div class="result-value benar">
                                                        <i class="fa fa-check"></i> <?= $d->benar ?>
                                                    </div>
                                                </div>
                                                <div class="result-item">
                                                    <div class="result-label">Salah</div>
                                                    <div class="result-value salah">
                                                        <i class="fa fa-times"></i> <?= $d->salah ?>
                                                    </div>
                                                </div>
                                                <div class="result-item">
                                                    <div class="result-label">Nilai</div>
                                                    <?php
                                                    $nilai_class = '';
                                                    if($d->nilai >= 85) {
                                                        $nilai_class = 'nilai-a';
                                                    } else if($d->nilai >= 70) {
                                                        $nilai_class = 'nilai-b';
                                                    } else if($d->nilai >= 55) {
                                                        $nilai_class = 'nilai-c';
                                                    } else {
                                                        $nilai_class = 'nilai-d';
                                                    }
                                                    ?>
                                                    <div class="nilai-mobile <?= $nilai_class ?>"><?= $d->nilai ?></div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </div>
</section><!-- /.content -->

<?php 
$this->load->view('siswa/js');
?>

<!--tambahkan custom js disini-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    // Fungsi untuk deteksi mobile devices
    function isMobile() {
        return window.innerWidth <= 768;
    }
    
    $(document).ready(function() {
        // Toggle tampilan antara mobile view dan desktop view
        function toggleView() {
            if (isMobile()) {
                $('.desktop-view').hide();
                $('.mobile-view').show();
            } else {
                $('.desktop-view').show();
                $('.mobile-view').hide();
            }
        }
        
        // Panggil fungsi saat halaman dimuat
        toggleView();
        
        // Panggil fungsi saat window di-resize
        $(window).resize(function() {
            toggleView();
        });
        
        // DataTables initialization
        var table = $('#data').DataTable({
            responsive: true,
            pageLength: isMobile() ? 5 : 10,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                zeroRecords: "Tidak ada hasil ujian",
                info: isMobile() ? "Halaman _PAGE_ dari _PAGES_" : "Menampilkan _START_ sampai _END_ dari _TOTAL_ hasil",
                infoEmpty: "Tidak ada data",
                infoFiltered: "(difilter dari _MAX_ total data)",
                paginate: {
                    next: isMobile() ? "<i class='fa fa-angle-right'></i>" : "Selanjutnya",
                    previous: isMobile() ? "<i class='fa fa-angle-left'></i>" : "Sebelumnya"
                }
            }
        });
        
        // Initialisasi AOS (Animate on Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Aktivasi tooltips Bootstrap
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('siswa/foot');
?>

