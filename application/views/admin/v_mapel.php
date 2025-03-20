<?php 
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  /* Styling untuk halaman mata pelajaran */
  .content-header {
    padding: 15px 15px 0;
  }
  
  .page-title {
    font-size: 24px;
    margin: 0;
    font-weight: 600;
    color: #2c3e50;
  }
  
  .page-subtitle {
    font-size: 14px;
    color: #7f8c8d;
    margin-top: 5px;
  }
  
  .action-buttons {
    margin-bottom: 20px;
  }
  
  .action-buttons .btn {
    margin-right: 8px;
    border-radius: 4px;
    padding: 8px 16px;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  
  .action-buttons .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .action-buttons .btn-primary {
    background: linear-gradient(to right, #3c8dbc, #367fa9);
    border: none;
  }
  
  .card-mapel {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    background: #fff;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  
  .card-mapel:hover {
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
    transform: translateY(-3px);
  }
  
  .card-header {
    padding: 15px 20px;
    background: #f8f9fa;
    border-bottom: 1px solid #e9ecef;
  }
  
  .card-title {
    margin: 0;
    font-weight: 600;
    color: #3c8dbc;
    font-size: 18px;
  }
  
  .card-body {
    padding: 20px;
  }
  
  .table-container {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
    overflow: hidden;
  }
  
  .table-responsive {
    overflow-x: auto;
  }
  
  .table {
    margin-bottom: 0;
  }
  
  .table thead th {
    background: #f8f9fa;
    color: #3c8dbc;
    font-weight: 600;
    border-bottom: 2px solid #e9ecef;
    padding: 12px 15px;
  }
  
  .table tbody td {
    padding: 12px 15px;
    vertical-align: middle;
    border-top: 1px solid #e9ecef;
  }
  
  .table tbody tr:hover {
    background-color: #f8f9fa;
  }
  
  .badge-kode {
    background: #3c8dbc;
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    font-weight: 600;
    font-size: 12px;
  }
  
  .btn-action {
    padding: 5px 10px;
    margin: 0 2px;
    border-radius: 4px;
    display: inline-block;
    width: 32px;
    height: 32px;
    text-align: center;
    line-height: 22px;
  }
  
  .btn-edit {
    background: #00a65a;
    color: white;
    border: none;
  }
  
  .btn-delete {
    background: #dd4b39;
    color: white;
    border: none;
  }
  
  /* Hover effect untuk tombol aksi */
  .btn-action:hover {
    opacity: 0.9;
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 3px 5px rgba(0,0,0,0.1);
  }
  
  /* Pastikan ikon di dalam tombol konsisten */
  .btn-action i {
    font-size: 14px;
    position: relative;
  }
  
  /* Modal styling */
  .modal-header {
    background: #3c8dbc;
    color: white;
    border-radius: 5px 5px 0 0;
  }
  
  .modal-title {
    font-weight: 600;
  }
  
  .modal-body {
    padding: 20px;
  }
  
  .form-group label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 8px;
    display: block;
  }
  
  .form-control {
    height: auto;
    padding: auto 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  
  .form-control:focus {
    border-color: #3c8dbc;
    box-shadow: 0 0 0 2px rgba(60, 141, 188, 0.2);
  }
  
  .modal-footer .btn {
    border-radius: 4px;
    padding: 8px 20px;
  }
  
  /* Responsif untuk mobile */
  @media (max-width: 768px) {
    .action-buttons .btn {
      margin-bottom: 10px;
      width: 100%;
    }
    
    .card-mapel {
      margin-bottom: 15px;
    }
    
    .table thead th, 
    .table tbody td {
      padding: 8px 10px;
    }
    
    /* Responsif untuk tombol pada tabel di mobile */
    .btn-action {
      width: 28px;
      height: 28px;
      padding: 3px 6px;
      line-height: 20px;
      margin: 0 1px;
    }
    
    .btn-action i {
      font-size: 12px;
    }
    
    /* Menambahkan padding pada card dan konten */
    .card-body {
      padding: 15px;
    }
    
    .table-container {
      padding: 0 10px;
    }
    
    /* Membuat tabel datatable responsif pada mobile */
    .table-responsive {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      padding-bottom: 10px;
      width: 100%;
      margin-left: 0;
      margin-right: 0;
    }
    
    /* Memberikan jarak pada tabel */
    .dataTables_wrapper {
      padding-top: 15px;
    }
    
    /* Mengoptimalkan kontrol DataTable */
    .dataTables_wrapper .dataTables_length, 
    .dataTables_wrapper .dataTables_filter {
      text-align: left;
      float: none;
      margin-bottom: 10px;
      width: 100%;
      padding-left: 10px;
      padding-right: 10px;
    }
    
    /* Memperbaiki tampilan Tampilkan dan Cari */
    .dataTables_length {
      margin-top: 5px;
      margin-bottom: 15px !important;
      text-align: left !important;
    }
    
    .dataTables_filter {
      text-align: left !important;
      margin-bottom: 15px !important;
    }
    
    .dataTables_filter label {
      width: 265px;
      text-align: left;
      font-weight: normal;
    }
    
    .dataTables_filter input {
      width: 100%;
      margin-left: 5px !important;
      margin-top: 5px;
      display: block;
      padding: 7px 10px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }
    
    /* Memastikan pagination responsive */
    .dataTables_wrapper .dataTables_paginate {
      float: none;
      text-align: center;
      margin-top: 10px;
      width: 100%;
      padding: 0 5px 10px;
    }
    
    .dataTables_wrapper .dataTables_info {
      padding: 0 5px;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      padding: 3px 8px;
      font-size: 12px;
    }
    
    /* Menambahkan padding untuk tabel */
    .dataTable {
      margin: 0 5px !important;
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
    Data Mata Pelajaran
    <small class="page-subtitle">Kelola semua mata pelajaran dalam sistem</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Mata Pelajaran</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
<div class="row">
    <div class="col-md-12">
        <!-- Default box -->
        <div class="card-mapel" data-aos="fade-up">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-book"></i> Manajemen Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <div class="card-body">
                <div class="action-buttons" data-aos="fade-up" data-aos-delay="100">
                  <a href="<?=base_url('soal_ujian')?>" class="btn btn-default">
                    <i class="fa fa-arrow-left"></i> Kembali
                  </a>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                    <i class="fa fa-plus"></i> Tambah Mata Pelajaran
                  </button>
                </div>
                
                <div class="table-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="table-responsive">
                        <table id="data" class="table table-bordered table-hover">                    
                            <thead>
                                <tr>
                                    <th width="1%">No</th>
                                    <th width="15%">Kode</th>
                                    <th>Nama Mata Pelajaran</th>                          
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                foreach($mapel as $m) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><span class="badge-kode"><?php echo $m->kode_matapelajaran; ?></span></td>
                                        <td><?php echo $m->nama_matapelajaran; ?></td>
                                        <td class="text-center">
                                          <a href="<?= base_url().'matapelajaran/edit/'.$m->id_matapelajaran; ?>" class="btn btn-action btn-edit" title="Edit">
                                            <i class="fa fa-edit"></i>
                                          </a>
                                          <a href="<?= base_url().'matapelajaran/hapus/'.$m->id_matapelajaran; ?>" class="btn btn-action btn-delete" onclick="return confirm('Apakah yakin data mata pelajaran ini akan dihapus?')" title="Hapus">
                                            <i class="fa fa-trash"></i>
                                          </a>
                                        </td>
                                    </tr>
                                <?php } ?>                  
                            </tbody>                
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section><!-- /.content -->

<!-- /. modal tambah mata pelajaran -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Data Mata Pelajaran</h4>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url().'matapelajaran/mapel_aksi'; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Mata Pelajaran" required="">
          </div>
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mata Pelajaran" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
      <!-- /.tutup form dengan modal  -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php 
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->

<script type="text/javascript">
    $(function() {
        $('#data').DataTable({
            'responsive': true,
            'autoWidth': false,
            'dom': '<"row"<"col-sm-12"<"row mb-2"<"col-sm-6"l><"col-sm-6"f>>>><"row"<"col-sm-12"t>><"row"<"col-sm-12"<"row"<"col-sm-5"i><"col-sm-7 text-right"p>>>>',
            'language': {
                'search': 'Cari:',
                'lengthMenu': 'Tampilkan _MENU_ data per halaman',
                'zeroRecords': 'Tidak ada data yang ditemukan',
                'info': 'Menampilkan halaman _PAGE_ dari _PAGES_',
                'infoEmpty': 'Tidak ada data yang tersedia',
                'infoFiltered': '(difilter dari _MAX_ total data)',
                'paginate': {
                    'first': 'Pertama',
                    'last': 'Terakhir',
                    'next': 'Selanjutnya',
                    'previous': 'Sebelumnya'
                }
            }
        });

        // Deteksi device mobile
        var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;
        
        // Khusus untuk mobile, tambahkan kelas untuk membantu responsivitas
        if (isMobile) {
            $('table').addClass('mobile-table');
            $('.table-responsive').addClass('mobile-scroll');
            
            // Tambahkan event untuk merapikan tampilan setelah DataTable diinisialisasi
            $('#data').on('init.dt', function() {
                $('.dataTables_length, .dataTables_filter').addClass('text-left');
                $('.dataTables_filter label').css('text-align', 'left');
                $('.dataTables_filter input').css('width', '100%').css('margin-left', '0');
                
                // Perbaikan positioning pagination di mobile
                $('.dataTables_info').css({
                    'text-align': 'center',
                    'width': '100%',
                    'margin-bottom': '10px',
                    'float': 'none'
                });
                
                $('.dataTables_paginate').css({
                    'text-align': 'center',
                    'width': '100%',
                    'float': 'none'
                });
                
                // Bagian row pada DataTable
                $('.dataTables_wrapper .row:last-child').css({
                    'margin': '0',
                    'display': 'flex',
                    'flex-direction': 'column',
                    'align-items': 'center'
                });
                
                $('.dataTables_wrapper .row:last-child .col-sm-5, .dataTables_wrapper .row:last-child .col-sm-7').css({
                    'width': '100%', 
                    'flex': '0 0 100%',
                    'max-width': '100%',
                    'text-align': 'center'
                });
            });
            
            // Trigger resize setelah halaman dimuat
            setTimeout(function() {
                $(window).trigger('resize');
            }, 300);
        } else {
            // Khusus untuk desktop
            $('#data').on('init.dt', function() {
                // Pastikan pagination berada di kanan (default)
                $('.dataTables_paginate').css({
                    'text-align': 'right',
                    'float': 'right',
                    'width': 'auto'
                });
                
                // Memastikan info halaman tidak terpotong
                $('.dataTables_info').css({
                    'text-align': 'left',
                    'padding-top': '8px'
                });
            });
        }
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
    
    // Tambahkan CSS langsung untuk pagination dan scroll
    $('head').append(`
        <style>
            /* Style untuk desktop - menghilangkan scroll horizontal */
            @media (min-width: 769px) {
                .table-responsive {
                    overflow-x: visible !important;
                }
                
                .dataTables_info {
                    padding-top: 8px !important;
                    margin: 0 !important;
                    float: left !important;
                }
                
                .dataTables_paginate {
                    float: right !important;
                    text-align: right !important;
                    padding-top: 0.25em !important;
                }
                
                .dataTables_wrapper .row:last-child .col-sm-5 {
                    width: 40% !important;
                    flex: 0 0 40% !important;
                    max-width: 40% !important;
                    text-align: left !important;
                }
                
                .dataTables_wrapper .row:last-child .col-sm-7 {
                    width: 60% !important;
                    flex: 0 0 60% !important;
                    max-width: 60% !important;
                    text-align: right !important;
                }
            }
            
            /* Style untuk mobile */
            @media only screen and (max-width: 768px) {
                .dataTables_paginate {
                    float: none !important;
                    text-align: center !important;
                    width: 100% !important;
                    margin-top: 10px !important;
                }
                
                .dataTables_info {
                    float: none !important;
                    text-align: center !important;
                    width: 100% !important;
                    padding-top: 0 !important;
                }
                
                .dataTables_wrapper .row:last-child {
                    display: flex !important;
                    flex-direction: column !important;
                }
                
                .dataTables_wrapper .row:last-child [class*="col-"] {
                    width: 100% !important;
                    flex: 0 0 100% !important;
                    max-width: 100% !important;
                    text-align: center !important;
                }
                
                .pagination {
                    display: inline-flex !important;
                    justify-content: center !important;
                    margin: 0 auto !important;
                }
            }
        </style>
    `);
</script>

<?php
$this->load->view('admin/foot');
?>