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
  
  .modal-header {
    background: linear-gradient(135deg, #2E7D32, #1B5E20);
    color: white;
    border-radius: 5px 5px 0 0;
  }
  
  .modal-title {
    color: white;
  }
  
  .modal-content {
    border-radius: 5px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border: none;
  }
  
  .modal-footer {
    background-color: #f9f9f9;
    border-top: 1px solid #efefef;
    border-radius: 0 0 5px 5px;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: all 0.3s;
  }
  
  .form-control:focus {
    border-color: #2E7D32;
    box-shadow: 0 0 5px rgba(46, 125, 50, 0.3);
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
      margin-bottom: 8px;
    }
    
    .table-container .table td {
      word-break: break-word;
    }
    
    .animated-box {
      margin: 0 10px;
    }
    
    .modal-dialog {
      margin: 10px;
    }
    .dataTables_info{
    align-items: center;
    justify-content: center;
    flex-wrap: nowrap;
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
                <h2><i class="fa fa-book"></i> Data Mata Pelajaran</h2>
                <p>Kelola mata pelajaran untuk sistem ujian online</p>
            </div>
            
            <!-- Main content box -->
            <div class="animated-box" data-aos="fade-up">
                <div class="box-header" style="padding: 15px 20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="button-container">
                                <a href="<?=base_url('soal_ujian')?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="100">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                                <button type="button" class="btn btn-gradient-success" data-toggle="modal" data-target="#modal-default" data-aos="zoom-in" data-aos-delay="200">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>
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
                                <th width="15%">Kode</th>
                                <th>Nama Mata Pelajaran</th>
                                <th width="15%" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            foreach($mapel as $m) { ?>
                                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><span class="badge" style="background-color: #2E7D32; padding: 5px 10px;"><?php echo $m->kode_matapelajaran; ?></span></td>
                                    <td><?php echo $m->nama_matapelajaran; ?></td>
                                    <td class="text-center">
                                        <a href="<?= base_url().'matapelajaran/edit/'.$m->id_matapelajaran; ?>" class="btn btn-gradient-success btn-sm action-btn" data-toggle="tooltip" title="Edit">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url().'matapelajaran/hapus/'.$m->id_matapelajaran; ?>" onclick="return confirm('Apakah yakin data mata pelajaran ini akan dihapus?')" class="btn btn-gradient-warning btn-sm action-btn" data-toggle="tooltip" title="Hapus">
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
</section><!-- /.content -->

<!-- Modal Tambah Mata Pelajaran -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Data Mata Pelajaran</h4>
      </div>
      <!-- Form dengan modal -->
      <form method="post" action="<?php echo base_url().'matapelajaran/mapel_aksi'; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label><i class="fa fa-code"></i> Kode Mata Pelajaran</label>
            <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode Mata Pelajaran" required="">
          </div>
          <div class="form-group">
            <label><i class="fa fa-book"></i> Nama Mata Pelajaran</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Mata Pelajaran" required="">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn btn-gradient-success"><i class="fa fa-save"></i> Simpan</button>
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
            }
        });
        
        // Tooltips
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>