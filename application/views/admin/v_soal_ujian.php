<?php
$this->load->view('admin/head');
?>

<!-- tambahkan custom css disini -->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #FF9800, #F57C00);
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  }
  
  .animated-box {
    transition: all 0.3s ease;
  }
  
  .animated-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  .btn-gradient-amber {
    background: linear-gradient(to right, #FF9800, #F57C00);
    border: none;
    color: white;
  }
  
  .btn-gradient-amber:hover {
    background: linear-gradient(to right, #F57C00, #E65100);
    color: white;
  }

  .btn-gradient-success {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    border: none;
    color: white;
  }
  
  .btn-gradient-success:hover {
    background: linear-gradient(to right, #2E7D32, #1B5E20);
    color: white;
  }
  
  .btn-gradient-danger {
    background: linear-gradient(to right, #e74c3c, #c0392b);
    border: none;
    color: white;
  }
  
  .table-container {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
  }
  
  .data-table thead th {
    background: linear-gradient(to right, #FF9800, #F57C00);
    color: white;
    border: none;
    padding: 12px 15px;
  }
  
  .action-btn {
    border-radius: 50px;
    padding: 5px 15px;
    font-size: 12px;
    transition: all 0.3s;
  }
  
  .soal-content {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    border-left: 3px solid #FF9800;
    margin-bottom: 10px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    word-wrap: break-word;
    overflow-wrap: break-word;
    width: 100%;
    display: block;
    white-space: normal;
  }
  
  .opsi-jawaban {
    margin-top: 10px;
    padding-left: 20px;
  }
  
  .opsi-jawaban ol {
    margin-bottom: 0;
    padding-left: 20px;
  }
  
  .opsi-jawaban li {
    padding: 3px 0;
    word-wrap: break-word;
    overflow-wrap: break-word;
    width: 100%;
  }
  
  .kunci-jawaban {
    background: linear-gradient(to right, #FFF3E0, #FFE0B2);
    padding: 3px 10px;
    border-radius: 3px;
    font-weight: 700;
    color: #E65100;
  }
  
  /* Button container untuk tampilan mobile */
  
  
  @media (max-width: 768px) {
    .content-header-custom {
      padding: 10px;
    }
    .dataTables_filter{
      text-align: left;
      float: left;
      margin-left: 8%;
    }
    .soal-content {
      padding: 10px;
      width: 100%;
      max-width: 100%;
      overflow-x: hidden;
      white-space: normal;
    }
    .opsi-jawaban {
      padding-left: 5px;
    }
    .opsi-jawaban ol {
      padding-left: 15px;
    }
    .btn {
      display: inline-block;
      margin-right: 5px;
      padding: 6px 10px;
      font-size: 12px;
      white-space: nowrap;
    }
    .table-responsive {
      border: none;
    }
    table.dataTable {
      width: 100% !important;
    }
    .table-responsive>.table {
      margin-bottom: 0;
    }
    .table td {
      word-break: break-word;
    }
    #data_paginate.dataTables_paginate.paging_simple_numbers{
        margin-left: 40px;
        margin-right: 40px;
        float: left;
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
                <h2><i class="fa fa-file-text"></i> Daftar Soal Ujian</h2>
                <p>Kelola dan atur soal ujian untuk sistem ujian online</p>
            </div>
            
            <!-- Main content box -->
            <div class="box animated-box" style="border-radius: 5px; border-top: 3px solid #FF9800;" data-aos="fade-up">
                <div class="box-header" style="padding: 15px 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Tombol dalam satu container khusus untuk mobile -->
                            <div class="button-container">
                                <a href="<?= base_url('soal') ?>" class="btn btn-gradient-amber" data-aos="zoom-in" data-aos-delay="100">
                                    <span class="fa fa-plus"></span> Tambah
                                </a>
                                <a href="<?= base_url('matapelajaran'); ?>" class="btn btn-gradient-success" data-aos="zoom-in" data-aos-delay="200">
                                    <span class="fa fa-book"></span> Data Mata Pelajaran
                                </a>
                                <a href="<?= base_url('soal_ujian'); ?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="300">
                                    <span class="fa fa-refresh"></span> Refresh
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
                                <th width="1%">No</th>
                                <th width="10%">Kode</th>
                                <th width="15%">Mata Pelajaran</th>
                                <th>Soal Ujian</th>
                                <th width="8%">Kunci</th>
                                <th width="10%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($soal_ujian as $d) { ?>
                                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                                    <td><?php echo $no++; ?></td>
                                    <td><span class="badge" style="background-color: #FF9800;"><?php echo $d->kode_matapelajaran; ?></span></td>
                                    <td><?php echo $d->nama_matapelajaran; ?></td>
                                    <td>
                                        <div class="soal-content">
                                            <div style="width: 100%; word-wrap: break-word;"><?php echo $d->pertanyaan; ?></div>
                                            <div class="opsi-jawaban">
                                                <ol type="A">
                                                    <li><?php echo ('A' == $d->kunci_jawaban) ? "<b>$d->a</b>" : $d->a; ?></li>
                                                    <li><?php echo ('B' == $d->kunci_jawaban) ? "<b>$d->b</b>" : $d->b; ?></li>
                                                    <li><?php echo ('C' == $d->kunci_jawaban) ? "<b>$d->c</b>" : $d->c; ?></li>
                                                    <li><?php echo ('D' == $d->kunci_jawaban) ? "<b>$d->d</b>" : $d->d; ?></li>
                                                    <li><?php echo ('E' == $d->kunci_jawaban) ? "<b>$d->e</b>" : $d->e; ?></li>
                                                </ol>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="kunci-jawaban"><?php echo $d->kunci_jawaban; ?></span>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url() . 'soal_ujian/edit/' . $d->id_soal_ujian; ?>" class="btn btn-gradient-amber btn-sm action-btn" data-toggle="tooltip" title="Edit Soal">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url() . 'soal_ujian/hapus/' . $d->id_soal_ujian; ?>" onclick="return confirm('Apakah yakin data soal ini akan dihapus?')" class="btn btn-gradient-danger btn-sm action-btn" data-toggle="tooltip" title="Hapus Soal">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>
<!-- tambahkan custom js disini -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
    $(function() {
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true
        });
        
        // Inisialisasi DataTable
        $('#data').DataTable({
            responsive: true,
            "autoWidth": false,
            "columnDefs": [
                { "width": "1%", "targets": 0 },
                { "width": "10%", "targets": 1 },
                { "width": "15%", "targets": 2 },
                { "width": "8%", "targets": 4 },
                { "width": "10%", "targets": 5 }
            ],
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
            }
        });
        
        // Tooltips
        $('[data-toggle="tooltip"]').tooltip();
    });
    
    $('.select2').select2();
    $('.alert-message').alert().delay(3000).slideUp('slow');
    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>
<?php
$this->load->view('admin/foot');
?>
