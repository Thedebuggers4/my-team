<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .hasil-header {
    background: linear-gradient(120deg, #dd4b39, #d73925);
    color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
  }
  
  .hasil-title {
    font-size: 24px;
    margin: 0;
    font-weight: 600;
  }
  
  .hasil-subtitle {
    font-size: 14px;
    opacity: 0.9;
    margin-top: 5px;
  }
  
  .table-responsive {
    background: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 30px;
    transition: all 0.3s ease;
  }
  
  .table-responsive:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  }
  
  .table-hasil {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
  }
  
  .table-hasil thead th {
    background: #f8f9fa;
    padding: 15px 10px;
    color: #333;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 1px;
    border: none;
    border-bottom: 2px solid #eee;
    text-align: center;
  }
  
  .table-hasil tbody td {
    padding: 12px 10px;
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
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    display: inline-block;
  }
  
  .status-belum {
    background-color: #f1c40f;
    color: #fff;
  }
  
  .nilai-box {
    font-weight: 700;
    font-size: 14px;
    color: #fff;
    border-radius: 4px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
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
    color: #dd4b39;
  }
  
  .nama-siswa {
    font-weight: 600;
    color: #333;
  }
  
  .refresh-btn {
    background: linear-gradient(to right, #dd4b39, #d73925);
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
  }
  
  .refresh-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 12px rgba(0,0,0,0.15);
    color: white;
  }
  
  .refresh-btn i {
    margin-right: 5px;
  }
  
  .benar-count {
    color: #2ecc71;
    font-weight: 600;
    display: inline-block;
    padding: 4px 8px;
    background-color: rgba(46, 204, 113, 0.1);
    border-radius: 4px;
  }
  
  .salah-count {
    color: #e74c3c;
    font-weight: 600;
    display: inline-block;
    padding: 4px 8px;
    background-color: rgba(231, 76, 60, 0.1);
    border-radius: 4px;
  }
  
  .badge-belum {
    display: inline-block;
    padding: 4px 8px;
    background-color: #f8f9fa;
    color: #7f8c8d;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 600;
  }
  
  .print-btn {
    background: linear-gradient(to right, #3498db, #2980b9);
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
    box-shadow: 0 3px 6px rgba(0,0,0,0.1);
  }
  
  .print-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 12px rgba(0,0,0,0.15);
    color: white;
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
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    flex: 1;
    margin: 0 10px;
    min-width: 180px;
    display: flex;
    align-items: center;
    transition: all 0.3s ease;
  }
  
  .stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
  }
  
  .stat-icon {
    width: 45px;
    height: 45px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 15px;
    font-size: 18px;
  }
  
  .stat-icon.avg {
    color: #fff;
    background: linear-gradient(45deg, #3498db, #2980b9);
  }
  
  .stat-icon.max {
    color: #fff;
    background: linear-gradient(45deg, #2ecc71, #27ae60);
  }
  
  .stat-icon.min {
    color: #fff;
    background: linear-gradient(45deg, #e74c3c, #c0392b);
  }
  
  .stat-icon.total {
    color: #fff;
    background: linear-gradient(45deg, #dd4b39, #d73925);
  }
  
  .stat-content h4 {
    font-size: 20px;
    font-weight: 700;
    margin: 0;
    line-height: 1;
    color: #333;
  }
  
  .stat-content p {
    margin: 5px 0 0;
    color: #7f8c8d;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  
  .animated-icon {
    animation: pulseIcon 1.5s infinite;
  }
  
  @keyframes pulseIcon {
    0% {transform: scale(1);}
    50% {transform: scale(1.1);}
    100% {transform: scale(1);}
  }
  
  /* Media queries untuk tampilan mobile */
  @media (max-width: 768px) {
    .stat-card {
      margin: 10px 0;
      width: 100%;
    }
    .hasil-header {
      text-align: center;
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
    Hasil Ujian
    <small>Data Perolehan Nilai Siswa</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Hasil Ujian</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <div class="row">
        <div class="col-md-12">
            <!-- Header Info -->
            <div class="hasil-header" data-aos="fade-down">
                <h3 class="hasil-title"><i class="fa fa-graduation-cap animated-icon"></i> Hasil Ujian Siswa</h3>
                <p class="hasil-subtitle">Laporan perolehan nilai siswa dari semua ujian yang telah dilaksanakan</p>
            </div>
            
            <!-- Statistik Cepat -->
            <div class="stats-container" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon total">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <h4>
                            <?php 
                            // Hitung total siswa
                            $total_siswa = count(array_unique(array_column($hasil, 'id_siswa')));
                            echo $total_siswa; 
                            ?>
                        </h4>
                        <p>Total Siswa</p>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-icon avg">
                        <i class="fa fa-calculator"></i>
                    </div>
                    <div class="stat-content">
                        <h4>
                            <?php 
                            // Hitung nilai rata-rata
                            $nilai_array = array_column($hasil, 'nilai');
                            $filtered_nilai = array_filter($nilai_array, function($nilai) {
                                return $nilai != '';
                            });
                            
                            $avg_nilai = !empty($filtered_nilai) ? round(array_sum($filtered_nilai) / count($filtered_nilai)) : 0;
                            echo $avg_nilai;
                            ?>
                        </h4>
                        <p>Nilai Rata-rata</p>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="stat-icon max">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <div class="stat-content">
                        <h4>
                            <?php 
                            // Hitung nilai tertinggi
                            echo !empty($filtered_nilai) ? max($filtered_nilai) : 0;
                            ?>
                        </h4>
                        <p>Nilai Tertinggi</p>
                    </div>
                </div>
                
                <div class="stat-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-icon min">
                        <i class="fa fa-arrow-down"></i>
                    </div>
                    <div class="stat-content">
                        <h4>
                            <?php 
                            // Hitung nilai terendah
                            echo !empty($filtered_nilai) ? min($filtered_nilai) : 0;
                            ?>
                        </h4>
                        <p>Nilai Terendah</p>
                    </div>
                </div>
            </div>
            
            <!-- Action buttons -->
            <div class="row" data-aos="fade-up" data-aos-delay="200">
                <div class="col-md-6">
                    <?php if (isset($_GET['id'])) $id = $_GET['id']; ?>
                    <a href="<?= base_url('hasil_ujian'); ?>" class="btn refresh-btn">
                        <i class="fa fa-refresh"></i> Refresh
                    </a>
                    <a href="<?= base_url('hasil_ujian/print_all') . (isset($id) ? '?id='.$id : ''); ?>" class="btn print-btn" target="_blank">
                        <i class="fa fa-print"></i> Cetak Hasil
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="form-group pull-right">
                        <label>Filter Mata Pelajaran: </label>
                        <select class="form-control" id="filter-mapel" onchange="filterByMapel(this.value)">
                            <option value="">Semua Mata Pelajaran</option>
                            <?php 
                            foreach($kelas as $k) {
                                $selected = (isset($_GET['id']) && $_GET['id'] == $k->id_matapelajaran) ? 'selected' : '';
                                echo "<option value='".$k->id_matapelajaran."' ".$selected.">".$k->nama_matapelajaran."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            
            <!-- Tabel Hasil -->
            <div class="table-responsive" data-aos="fade-up" data-aos-delay="300">
                <table id="data" class="table table-hasil">                    
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama Siswa</th>                            
                            <th>NIS</th>                            
                            <th>Mata Pelajaran</th>                            
                            <th>Tanggal Ujian</th>                            
                            <th>Jam Ujian</th>                            
                            <th>Jenis Ujian</th>                            
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
                                <td class="nama-siswa"><?php echo $d->nama_siswa; ?></td>                                
                                <td><?php echo $d->nis; ?></td>                                
                                <td class="mata-pelajaran"><?php echo $d->nama_matapelajaran; ?></td>                                
                                <td><i class="fa fa-calendar"></i> <?php echo date('d-m-Y',strtotime($d->tanggal_ujian)); ?></td>
                                <td><i class="fa fa-clock-o"></i> <?php echo date('H:i:s',strtotime($d->jam_ujian)); ?></td>
                                <td><?php echo $d->jenis_ujian; ?></td>
                                <td>
                                    <?php
                                    if($d->benar == ''){
                                        echo "<span class='badge-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                    }else {
                                        echo "<span class='benar-count'><i class='fa fa-check'></i> ".$d->benar."</span>";
                                    }
                                    ?>
                                </td>                                
                                <td>
                                    <?php
                                    if($d->salah == ''){
                                        echo "<span class='badge-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                    }else {
                                        echo "<span class='salah-count'><i class='fa fa-times'></i> ".$d->salah."</span>";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($d->nilai == ''){
                                        echo "<span class='badge-belum'><i class='fa fa-hourglass-half'></i> Belum Ujian</span>";
                                    } else {
                                        // Menentukan kelas warna berdasarkan rentang nilai
                                        $nilai_class = '';
                                        if ($d->nilai >= 80) {
                                            $nilai_class = 'nilai-a';
                                        } elseif ($d->nilai >= 70) {
                                            $nilai_class = 'nilai-b';
                                        } elseif ($d->nilai >= 60) {
                                            $nilai_class = 'nilai-c';
                                        } else {
                                            $nilai_class = 'nilai-d';
                                        }
                                        
                                        echo "<div class='nilai-box " . $nilai_class . "'>" . $d->nilai . "</div>";
                                    }
                                    ?>
                                </td>
                            </tr>
                        <?php } ?>                  
                    </tbody> 
                </table>
            </div>
        </div>
    </div>
</section><!-- /.content -->

<?php 
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript">
    $(function(){
        $('#data').DataTable({
            "responsive": true,
            "autoWidth": false,
            "ordering": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Semua"]],
            "language": {
                "search": "Cari:",
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Tidak ada data yang ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
        $('.select2').select2();
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
    
    // Fungsi untuk filter berdasarkan mata pelajaran
    function filterByMapel(id) {
        if (id) {
            window.location.href = '<?= base_url('hasil_ujian'); ?>?id=' + id;
        } else {
            window.location.href = '<?= base_url('hasil_ujian'); ?>';
        }
    }
</script>

<?php
$this->load->view('admin/foot');
?>
