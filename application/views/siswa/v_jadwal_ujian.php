<?php
$this->load->view('siswa/head');
?>
<!--tambahkan custom css disini-->
<style>
  .jadwal-header {
    background: linear-gradient(120deg, #3498db, #2c3e50);
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .jadwal-title {
    font-size: 24px;
    margin: 0;
    font-weight: 600;
  }
  .jadwal-subtitle {
    font-size: 14px;
    opacity: 0.8;
    margin-top: 5px;
  }
  .jadwal-date {
    background: rgba(255,255,255,0.2);
    padding: 8px 15px;
    border-radius: 20px;
    display: inline-block;
    margin-top: 10px;
    font-weight: 500;
  }
  .jadwal-date i {
    margin-right: 5px;
  }
  .jadwal-time {
    font-weight: bold;
    color: #fff;
  }
  .table-responsive {
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 30px;
    overflow-x: auto;
  }
  .table-jadwal {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
  }
  .table-jadwal thead th {
    background: #f8f9fa;
    padding: 15px 10px;
    color: #2c3e50;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    border: none;
    border-bottom: 2px solid #eee;
  }
  .table-jadwal tbody td {
    padding: 15px 10px;
    border: none;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
  }
  .table-jadwal tbody tr:hover {
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
  .status-completed {
    background-color: #2ecc71;
    color: #fff;
  }
  .status-waiting {
    background-color: #bdc3c7;
    color: #2c3e50;
  }
  .btn-start {
    background: linear-gradient(to right, #2ecc71, #27ae60);
    border: none;
    color: white;
    padding: 8px 20px;
    border-radius: 30px;
    font-weight: 600;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 12px;
    box-shadow: 0 3px 10px rgba(39, 174, 96, 0.3);
  }
  .btn-start:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(39, 174, 96, 0.4);
    color: white;
  }
  .mata-pelajaran {
    font-weight: 600;
    color: #3498db;
  }
  .kode-pelajaran {
    display: inline-block;
    background: #eee;
    padding: 4px 10px;
    border-radius: 4px;
    color: #555;
    font-size: 12px;
    font-weight: 600;
  }
  .waktu-ujian {
    color: #e74c3c;
    font-weight: 500;
  }
  .durasi-ujian {
    font-weight: 500;
    color: #7f8c8d;
  }
  .jenis-ujian {
    color: #9b59b6;
    font-weight: 500;
  }
  /* Counter */
  .counter-container {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }
  .counter-item {
    background: white;
    border-radius: 10px;
    margin: 0 5px;
    padding: 15px 25px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    min-width: 100px;
  }
  .counter-number {
    font-size: 24px;
    font-weight: 700;
    color: #3498db;
    margin-bottom: 5px;
  }
  .counter-label {
    text-transform: uppercase;
    font-size: 11px;
    color: #95a5a6;
    letter-spacing: 1px;
  }
  /* Media queries untuk tampilan mobile */
  @media (max-width: 768px) {
    .counter-container {
      flex-direction: column;
    }
    
    .counter-item {
      margin: 5px 0;
      width: 100%;
    }
    
    .jadwal-header .row {
      text-align: center;
    }
    
    .jadwal-header .col-md-6 {
      margin-bottom: 15px;
    }
    
    .jadwal-date {
      margin-top: 10px;
      margin-bottom: 10px;
    }
    
    .table-jadwal {
      width: 100%;
      min-width: 500px; /* Untuk memastikan tabel tidak terlalu kecil */
    }
    
    .table-jadwal thead th,
    .table-jadwal tbody td {
      white-space: nowrap;
      padding: 10px 8px;
      font-size: 12px;
    }
    
    .status-badge {
      padding: 5px 8px;
      font-size: 10px;
    }
    
    .btn-start {
      padding: 5px 10px;
      font-size: 10px;
    }
    
    .waktu-ujian, .durasi-ujian {
      font-size: 11px;
    }
    
    /* Kustomisasi card untuk tampilan mobile */
    .stat-card {
      margin: 5px 0;
      padding: 10px;
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
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
  }
  
  .mobile-card .card-title {
    flex: 1;
  }
  
  .mobile-card .card-title h4 {
    margin: 5px 0 0;
    font-weight: 600;
    color: #3498db;
    font-size: 16px;
  }
  
  .mobile-card .card-status {
    text-align: right;
  }
  
  .mobile-card .card-body {
    padding: 15px;
  }
  
  .mobile-card .card-info p {
    margin: 5px 0;
    font-size: 13px;
    color: #7f8c8d;
  }
  
  .mobile-card .card-info p i {
    width: 20px;
    text-align: center;
    margin-right: 5px;
    color: #3498db;
  }
  
  .mobile-card .card-footer {
    padding: 15px;
    background: #f9f9f9;
    border-top: 1px solid #f1f1f1;
  }
  
  /* Sembunyikan/Tampilkan berdasarkan ukuran layar */
  @media (max-width: 768px) {
    .desktop-view {
      display: none !important;
    }
    
    .mobile-view {
      display: block !important;
    }
    
    /* Membuat counter container fullwidth pada mobile */
    .counter-container {
      flex-direction: row;
      flex-wrap: wrap;
    }
    
    .counter-item {
      flex: 1 0 calc(50% - 10px);
      min-width: calc(50% - 10px);
      margin: 5px;
    }
  }
</style>

<?php
$this->load->view('siswa/topbar');
$this->load->view('siswa/sidebar');
date_default_timezone_set('Asia/Jakarta');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="animate__animated animate__fadeInDown">
    Jadwal Ujian
    <small>Manajemen Jadwal Ujian</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home_siswa') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Jadwal Ujian</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <!-- Header Info -->
    <div class="jadwal-header" data-aos="fade-down">
        <div class="row">
            <div class="col-md-6">
                <h3 class="jadwal-title"><i class="fa fa-calendar"></i> Jadwal Ujian</h3>
                <p class="jadwal-subtitle">Kelola dan lihat semua jadwal ujian yang tersedia.</p>
                <div class="jadwal-date">
                    <i class="fa fa-calendar-check-o"></i> <?php print Date('d F Y'); ?> | <span class="jadwal-time" id="time"></span>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <a href="<?php echo base_url('ruang_hasil')?>" class="btn btn-primary" data-aos="fade-left" data-toggle="tooltip" title="Lihat hasil ujian Anda">
                  <i class="fa fa-trophy"></i> Lihat Hasil Ujian
                </a>
            </div>
        </div>
    </div>

    <!-- Counter Information -->
    <div class="counter-container" data-aos="fade-up">
        <?php
        $total = 0;
        $completed = 0;
        $pending = 0;
        
        foreach ($peserta as $d) {
            $total++;
            if ($d->status_ujian == 2) {
                $completed++;
            } else {
                $pending++;
            }
        }
        ?>
        <div class="counter-item">
            <div class="counter-number"><?php echo $total; ?></div>
            <div class="counter-label">Total Ujian</div>
        </div>
        <div class="counter-item">
            <div class="counter-number"><?php echo $completed; ?></div>
            <div class="counter-label">Sudah Diikuti</div>
        </div>
        <div class="counter-item">
            <div class="counter-number"><?php echo $pending; ?></div>
            <div class="counter-label">Belum Diikuti</div>
        </div>
    </div>

    <div class="row">
        <!-- Desktop view - Table -->
        <div class="col-md-12 desktop-view">
            <div class="table-responsive">
                <table id="data" class="table table-jadwal">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Kode</th>
                            <th>Mata Pelajaran</th>
                            <th>Waktu Ujian</th>
                            <th>Durasi</th>
                            <th>Jenis Ujian</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($peserta as $d) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><span class="kode-pelajaran"><?php echo $d->kode_matapelajaran; ?></span></td>
                                <td class="mata-pelajaran"><?php echo $d->nama_matapelajaran; ?></td>
                                <td class="waktu-ujian"><i class="fa fa-clock-o"></i> <?php echo date('d-m-Y', strtotime($d->tanggal_ujian)); ?> | <?php echo date('H:i:s', strtotime($d->jam_ujian)); ?></td>
                                <td class="durasi-ujian"><i class="fa fa-hourglass-half"></i> <?php echo $d->durasi_ujian; ?> Menit</td>
                                <td class="jenis-ujian"><?php echo $d->jenis_ujian; ?></td>
                                <td>
                                    <?php if ($d->status_ujian == 0) {
                                        echo "<span class='status-badge status-waiting'><i class='fa fa-exclamation-circle'></i> Belum Mulai Ujian</span>";
                                    } else if ($d->status_ujian == 2) {
                                        echo "<span class='status-badge status-completed'><i class='fa fa-check-circle'></i> Sudah Mengikuti Ujian</span>";
                                    } else if ($d->status_ujian == 1) {
                                        if ($d->status_ujian == 1) {
                                            if (Date('d-m-Y', strtotime($d->tanggal_ujian)) == Date('d-m-Y') && Date('H:i:s', strtotime($d->jam_ujian)) <= Date('H:i:s')) {
                                                echo "<a href='" . 'ruang_ujian/soal/' . "$d->id_peserta' class='btn btn-start'><i class='fa fa-play-circle'></i> Mulai Ujian</a>";
                                            } else if (Date('d-m-Y', strtotime($d->tanggal_ujian)) == Date('d-m-Y') && Date('H:i:s', strtotime($d->jam_ujian)) <= Date('H:i:s')) {
                                                echo "<span class='status-badge status-waiting'><i class='fa fa-times-circle'></i> Waktu Ujian Habis</span>";
                                            } else {
                                                echo "<span class='status-badge status-pending'><i class='fa fa-clock-o'></i> Tuggu Waktu Ujian</span>";
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Mobile view - Cards -->
        <div class="col-md-12 mobile-view" style="display: none;">
            <div class="mobile-cards-container">
                <?php
                $delay = 50;
                foreach ($peserta as $p): ?>
                    <div class="mobile-card" data-aos="fade-up" data-aos-delay="<?= $delay += 50 ?>">
                        <div class="card-header">
                            <div class="card-title">
                                <span class="badge badge-primary"><?= $p->kode_matapelajaran ?></span>
                                <h4><?= $p->nama_matapelajaran ?></h4>
                            </div>
                            <div class="card-status">
                                <?php if ($p->status_ujian == 0): ?>
                                    <span class="status-badge status-waiting">
                                        <i class="fa fa-clock-o"></i> Belum mulai
                                    </span>
                                <?php elseif($p->status_ujian == 2): ?>
                                    <span class="status-badge status-completed">
                                        <i class="fa fa-check-circle"></i> Selesai
                                    </span>
                                <?php else: ?>
                                    <span class="status-badge status-pending">
                                        <i class="fa fa-hourglass-half"></i> Sedang berjalan
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-info">
                                <p><i class="fa fa-calendar"></i> Tanggal: <?= date('d M Y', strtotime($p->tanggal_ujian)) ?></p>
                                <p><i class="fa fa-clock-o"></i> Waktu: <?= date('H:i:s', strtotime($p->jam_ujian)) ?></p>
                                <p><i class="fa fa-hourglass-end"></i> Durasi: <?= $p->durasi_ujian ?> menit</p>
                                <p><i class="fa fa-list-alt"></i> Jenis Ujian: <?= $p->jenis_ujian ?></p>
                            </div>
                        </div>
                        <div class="card-footer">
                            <?php if ($p->status_ujian == 0 || $p->status_ujian == 1): ?>
                                <?php 
                                    if (Date('d-m-Y', strtotime($p->tanggal_ujian)) == Date('d-m-Y') && 
                                        Date('H:i:s', strtotime($p->jam_ujian)) <= Date('H:i:s')):
                                ?>
                                    <a href="<?= base_url('ruang_ujian/soal/') . $p->id_peserta ?>" class="btn btn-start btn-block">
                                        <i class="fa fa-play-circle"></i> Mulai Ujian
                                    </a>
                                <?php else: ?>
                                    <button class="btn btn-default btn-block" disabled>
                                        <i class="fa fa-lock"></i> Belum Dimulai
                                    </button>
                                <?php endif; ?>
                            <?php else: ?>
                                <a href="<?= base_url('ruang_hasil') ?>" class="btn btn-primary btn-block">
                                    <i class="fa fa-trophy"></i> Lihat Hasil
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
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
        var table = $("#data").DataTable({
            responsive: true,
            pageLength: isMobile() ? 5 : 10,
            language: {
                search: "Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
                zeroRecords: "Tidak ada jadwal ujian",
                info: isMobile() ? "Halaman _PAGE_ dari _PAGES_" : "Menampilkan _START_ sampai _END_ dari _TOTAL_ jadwal",
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
    
    window.setTimeout("waktu()", 1000);

    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
        if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('time').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
</script>

<?php
$this->load->view('admin/foot');
?>