<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #2E7D32, #1B5E20);
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  
  .animated-box {
    transition: all 0.3s ease;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border-top: 3px solid #2E7D32;
    background-color: white;
    margin-bottom: 20px;
  }
  
  .animated-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .btn-gradient-success {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    border: none;
    color: white;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-gradient-success:hover {
    background: linear-gradient(to right, #2E7D32, #1B5E20);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    color: white;
  }
  
  .btn-gradient-warning {
    background: linear-gradient(to right, #FF9800, #F57C00);
    border: none;
    color: white;
    padding: 6px 15px;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-gradient-warning:hover {
    background: linear-gradient(to right, #F57C00, #E65100);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    color: white;
  }
  
  .btn-default {
    background: #f4f4f4;
    border: 1px solid #ddd;
    color: #333;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-default:hover {
    background: #e7e7e7;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  .btn-success {
    background-color: #2E7D32;
    border-color: #2E7D32;
  }
  
  .btn-success:hover {
    background-color: #1B5E20;
    border-color: #1B5E20;
  }
  
  .table-container {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  }
  
  .data-table thead th {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    color: white;
    border: none;
    padding: 12px 15px;
  }
  
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 77, 0, 0.03);
  }
  
  .action-btn {
    border-radius: 50px;
    padding: 5px 15px;
    font-size: 12px;
    transition: all 0.3s;
  }
  
  .status-badge {
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: bold;
  }
  
  .status-pending {
    background-color: #f0f0f0;
    color: #666;
  }
  
  .status-completed {
    background-color: #E8F5E9;
    color: #2E7D32;
    border: 1px solid #C8E6C9;
  }
  
  /* Button container */
  .button-container {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  
  @media (max-width: 768px) {
    .content-header-custom {
      padding: 10px;
      margin-bottom: 10px;
    }
    
    .content-header-custom h2 {
      font-size: 20px;
      margin-top: 5px;
    }
    
    .content-header-custom p {
      font-size: 14px;
      margin-bottom: 5px;
    }
    
    .button-container {
      justify-content: center;
      flex-wrap: nowrap;
    }
    
    .table-responsive {
      border: none;
    }
    
    table.dataTable {
      width: 100% !important;
    }
    
    .dataTables_filter {
      text-align: left;
      float: left;
      margin-left: 5%;
    }
    
    .table-container .table td {
      word-break: break-word;
    }
    
    .animated-box {
      margin: 0 10px 15px 10px;
    }
  }
</style>

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Header section with title -->
            <div class="content-header-custom" data-aos="fade-down">
                <h2><i class="fa fa-users"></i> Daftar Peserta Ujian</h2>
                <p>Kelola data peserta untuk sistem ujian online</p>
            </div>
            
            <!-- Main content box -->
            <div class="animated-box" data-aos="fade-up">
                <div class="box-header" style="padding: 15px 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="button-container">
                                <a href="<?php echo base_url('peserta_tambah'); ?>" class="btn btn-gradient-success" data-aos="zoom-in" data-aos-delay="100">
                                    <i class="fa fa-plus"></i> Tambah
                                </a>
                                <a href="<?php echo base_url('jenis_ujian'); ?>" class="btn btn-gradient-success" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="fa fa-list"></i> Data Jenis Ujian
                                </a>
                                <a href="<?= base_url('peserta'); ?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="300">
                                    <i class="fa fa-refresh"></i> Refresh
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Table content -->
                <div class="box-body table-responsive table-container">
                    <table id="data" class="table table-bordered table-striped data-table responsive nowrap" width="100%">
                        <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                                <th>Mata Pelajaran</th>
                                <th>Jenis Ujian</th>
                                <th>Waktu Ujian</th>
                                <th>Durasi</th>
                                <th width="10%" class="text-center">Aksi</th>
                                <th width="10%" class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($peserta as $d) { ?>
                                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><strong><?php echo $d->nama_siswa; ?></strong></td>
                                    <td><?php echo $d->nama_kelas; ?></td>
                                    <td><?php echo $d->nama_matapelajaran; ?></td>
                                    <td><span class="badge" style="background-color: #2E7D32; padding: 5px 10px;"><?php echo $d->jenis_ujian; ?></span></td>
                                    <td><?php echo date('d-m-Y', strtotime($d->tanggal_ujian)); ?> | <?php echo $d->jam_ujian; ?></td>
                                    <td><?php echo $d->durasi_ujian; ?> Menit</td>
                                    <td class="text-center">
                                        <?php if ($d->nilai == null) { ?>
                                            <a href="<?= base_url() . 'peserta/edit/' . $d->id_peserta; ?>" class="btn btn-gradient-success btn-sm action-btn" data-toggle="tooltip" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="<?= base_url() . 'peserta/hapus/' . $d->id_peserta; ?>" onclick="return confirm('Apakah yakin data peserta ini akan dihapus?')" class="btn btn-gradient-warning btn-sm action-btn" data-toggle="tooltip" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        <?php } else { 
                                            echo '<span class="badge" style="background-color: #999; color: white;">Tidak tersedia</span>';
                                        } ?>
                                    </td>
                                    <td class="text-center">
                                        <?php if ($d->status_ujian == "1") { ?>
                                            <span class="status-badge status-pending">Belum Ujian</span>
                                        <?php } else if ($d->status_ujian == "2") { ?>
                                            <span class="status-badge status-completed">Selesai Ujian</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Inisialisasi DataTable
        $('#data').DataTable({
            responsive: true,
            "autoWidth": false,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "search": "Cari:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
            },
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
        
        // Tooltips
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>