<?php
$this->load->view('admin/head');
?>

<!-- tambahkan custom css disini -->
<style>
  /* Styling untuk halaman soal ujian */
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
  
  .card-soal {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    margin-bottom: 20px;
    background: #fff;
    overflow: hidden;
    transition: all 0.3s ease;
  }
  
  .card-soal:hover {
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
  
  .badge-kunci {
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
  
  .soal-text {
    font-weight: 500;
    margin-bottom: 10px;
  }
  
  .jawaban-list {
    padding-left: 20px;
    margin-bottom: 0;
  }
  
  .jawaban-list li {
    margin-bottom: 5px;
  }
  
  .jawaban-benar {
    font-weight: 700;
    color: #00a65a;
  }
  
  /* Responsif untuk mobile */
  @media (max-width: 768px) {
    .action-buttons .btn {
      margin-bottom: 10px;
      width: 100%;
    }
    
    .card-soal {
      margin-bottom: 15px;
    }
    
    .table thead th, 
    .table tbody td {
      padding: 8px 10px;
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
    
    /* Menghilangkan shadow karena menyebabkan masalah layout */
    .table-responsive::after {
      display: none;
    }
    
    /* Mengatur ulang ukuran kolom untuk mobile */
    .table thead th,
    .table tbody td {
      min-width: 40px;
      max-width: none;
      white-space: normal;
    }
    
    /* Khusus untuk kolom No */
    .table thead th:first-child, 
    .table tbody td:first-child {
      width: 30px !important;
      min-width: 30px !important;
      max-width: 30px !important;
      white-space: nowrap;
    }
    
    /* Khusus untuk kolom Kode */
    .table thead th:nth-child(2), 
    .table tbody td:nth-child(2) {
      width: 40px !important;
      min-width: 40px !important;
      max-width: 60px !important;
      white-space: nowrap;
    }
    
    /* Khusus untuk kolom Mata Pelajaran */
    .table thead th:nth-child(3), 
    .table tbody td:nth-child(3) {
      width: 70px !important;
      min-width: 70px !important;
      max-width: 90px !important;
      white-space: normal;
    }
    
    /* Khusus untuk kolom Soal */
    .table thead th:nth-child(4), 
    .table tbody td:nth-child(4) {
      min-width: 150px;
      white-space: normal;
    }
    
    /* Khusus untuk kolom Kunci */
    .table thead th:nth-child(5), 
    .table tbody td:nth-child(5) {
      width: 50px !important;
      min-width: 50px !important;
      max-width: 60px !important;
      white-space: nowrap;
    }
    
    /* Khusus untuk kolom Aksi */
    .table thead th:nth-child(6), 
    .table tbody td:nth-child(6) {
      width: 60px !important;
      min-width: 60px !important;
      max-width: 70px !important;
      white-space: nowrap;
    }
    
    /* Memperkecil ukuran font untuk menghemat ruang */
    .table {
      font-size: 12px;
    }
    
    /* Menyesuaikan tampilan teks soal dan jawaban */
    .soal-text {
      font-size: 12px;
      white-space: normal;
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      margin-bottom: 5px;
    }
    
    .jawaban-list {
      font-size: 11px;
      white-space: normal;
      padding-left: 15px;
    }
    
    .jawaban-list li {
      margin-bottom: 2px;
    }
    
    /* Membuat tombol aksi lebih kecil dan rapat */
    .btn-action {
      padding: 3px 6px;
      font-size: 12px;
      margin: 1px;
    }
    
    .badge-kunci {
      font-size: 10px;
      padding: 3px 6px;
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
    .dataTables_wrapper {
      padding-top: 15px;
    }
    
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
      width: auto;
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
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button {
      padding: 3px 8px;
      font-size: 12px;
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
    Daftar Soal Ujian
    <small class="page-subtitle">Kelola semua soal ujian dalam sistem</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Daftar Soal Ujian</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card-soal" data-aos="fade-up">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-book"></i> Manajemen Soal Ujian</h3>
                </div>
                <div class="card-body">
                    <div class="action-buttons" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?= base_url('soal') ?>" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Tambah Soal
                        </a>
                        <a href="<?php echo base_url('matapelajaran'); ?>" class="btn btn-info">
                            <i class="fa fa-list"></i> Data Mata Pelajaran
                        </a>
                        <a href="<?= base_url('soal_ujian'); ?>" class="btn btn-default">
                            <i class="fa fa-refresh"></i> Refresh
                        </a>
                    </div>

                    <div class="table-container" data-aos="fade-up" data-aos-delay="200">
                        <div class="table-responsive">
                            <table id="data" class="table table-bordered table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="10%">Kode</th>
                                        <th width="15%">Mata Pelajaran</th>
                                        <th>Soal Ujian</th>
                                        <th width="10%">Kunci</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($soal_ujian as $d) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><span class="badge bg-blue"><?php echo $d->kode_matapelajaran; ?></span></td>
                                            <td><?php echo $d->nama_matapelajaran; ?></td>
                                            <td>
                                                <div class="soal-text"><?php echo $d->pertanyaan; ?></div>
                                                <ol type="A" class="jawaban-list">
                                                    <li class="<?php echo ('A' == $d->kunci_jawaban) ? 'jawaban-benar' : ''; ?>"><?php echo $d->a; ?></li>
                                                    <li class="<?php echo ('B' == $d->kunci_jawaban) ? 'jawaban-benar' : ''; ?>"><?php echo $d->b; ?></li>
                                                    <li class="<?php echo ('C' == $d->kunci_jawaban) ? 'jawaban-benar' : ''; ?>"><?php echo $d->c; ?></li>
                                                    <li class="<?php echo ('D' == $d->kunci_jawaban) ? 'jawaban-benar' : ''; ?>"><?php echo $d->d; ?></li>
                                                    <li class="<?php echo ('E' == $d->kunci_jawaban) ? 'jawaban-benar' : ''; ?>"><?php echo $d->e; ?></li>
                                                </ol>
                                            </td>
                                            <td>
                                                <span class="badge-kunci">
                                                    <?php echo $d->kunci_jawaban; ?>
                                                </span>
                                            </td>
                                            <td>
                                                <a href="<?= base_url() . 'soal_ujian/edit/' . $d->id_soal_ujian; ?>" class="btn btn-action btn-edit" title="Edit Soal">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url() . 'soal_ujian/hapus/' . $d->id_soal_ujian; ?>" class="btn btn-action btn-delete" onclick="return confirm('Apakah yakin data soal ini akan di hapus?')" title="Hapus Soal">
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

<?php
$this->load->view('admin/js');
?>
<!-- tambahkan custom js disini -->
<script type="text/javascript">
    $(function() {
        // Deteksi device mobile
        var isMobile = window.matchMedia("only screen and (max-width: 768px)").matches;
        
        var tableOptions = {
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
            },
            responsive: true,
            autoWidth: false,
            // Mengubah struktur DOM ke default dengan align kanan untuk pagination
            dom: '<"row"<"col-sm-12"<"row mb-2"<"col-sm-6"l><"col-sm-6"f>>>><"row"<"col-sm-12"t>><"row"<"col-sm-12"<"row"<"col-sm-5"i><"col-sm-7 text-right"p>>>>'
        };
        
        // Tambahan opsi untuk mobile
        if (isMobile) {
            tableOptions.scrollX = true;
            tableOptions.scrollCollapse = true;
            tableOptions.paging = true;
            
            // Konfigurasi kolom untuk tampilan mobile
            tableOptions.columnDefs = [
                { "width": "30px", "targets": 0, "className": "text-center" },
                { "width": "40px", "targets": 1, "className": "text-center" },
                { "width": "70px", "targets": 2 },
                { "width": "150px", "targets": 3 },
                { "width": "50px", "targets": 4 },
                { "width": "60px", "targets": 5 }
            ];
            
            // Khusus untuk mobile, tambahkan kelas untuk membantu responsivitas
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
        
        var table = $('#data').DataTable(tableOptions);
        
        // Pastikan tabel dirender dengan benar di mobile
        $(window).on('resize', function() {
            if (table) {
                table.columns.adjust();
            }
        });
        
        // Trigger resize setelah halaman dimuat
        setTimeout(function() {
            $(window).trigger('resize');
        }, 300);
    });
    
    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
    $('.alert-dismissible').alert().delay(3000).slideUp('slow');

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
