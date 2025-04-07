<?php
$this->load->view('admin/head');
?>

<!--tambahkan custom css disini-->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #4CAF50, #2E7D32);
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
  
  .btn-gradient-success {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    border: none;
    color: white;
  }
  
  .btn-gradient-success:hover {
    background: linear-gradient(to right, #2E7D32, #1B5E20);
    color: white;
  }
  
  .btn-gradient-warning {
    background: linear-gradient(to right, #FFA000, #FF6F00);
    border: none;
    color: white;
  }
  
  .custom-alert {
    border-radius: 5px;
    border-left: 4px solid #f44336;
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
  
  .action-btn {
    border-radius: 50px;
    padding: 5px 15px;
    font-size: 12px;
    transition: all 0.3s;
  }
  
  .modal-header-custom {
    background: linear-gradient(135deg, #4CAF50, #2E7D32);
    color: white;
    border-radius: 5px 5px 0 0;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    padding: 0 12px;
    transition: all 0.3s;
  }
  
  .form-control:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
  }
  
  @media (max-width: 768px) {
    .content-header-custom {
      padding: 10px;
    }
    .dataTables_filter{
      text-align: left;
      float: left;
      margin-left: 14.5%;
    }
    .btn {
      display: inline-block;
      margin-bottom: 5px;
      width: auto;
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
        <h2><i class="fa fa-th-list"></i> Data Kelas</h2>
        <p>Kelola dan atur data kelas untuk sistem ujian online</p>
      </div>
      
      <!-- Alert section -->
      <div class="alert custom-alert alert-dismissible" data-aos="fade-up">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-ban"></i> Peringatan!</h4>
        Apabila Anda menghapus data kelas, maka data mahasiswa yang ada pada data kelas tersebut akan terhapus!
      </div>
      
      <!-- Main content box -->
      <div class="box animated-box" style="border-radius: 5px; border-top: 3px solid #4CAF50;" data-aos="fade-up">
        <div class="box-header" style="padding: 15px 20px;">
          <div class="row">
            <div class="col-md-6">
              <a href="<?=base_url('siswa')?>" class="btn btn-default btn-flat" data-aos="zoom-in" data-aos-delay="100">
                <span class="fa fa-arrow-left"></span> Kembali
              </a>
              <button type="button" class="btn btn-gradient-success" data-toggle="modal" data-target="#modal-default" data-aos="zoom-in" data-aos-delay="200">
                <span class="fa fa-plus"></span> Tambah
              </button>
            </div>
          </div>
        </div>
        
        <!-- Table content -->
        <div class="box-body table-container">
          <table id="data" class="table table-bordered table-striped data-table responsive nowrap" width="100%">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th>Nama Kelas</th>
                <th width="15%" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($kelas as $m) { ?>
                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->nama_kelas; ?></td>
                  <td class="text-center">
                    <a href="<?= base_url('kelas/edit/') . $m->id_kelas; ?>" class="btn btn-gradient-success btn-sm action-btn" data-toggle="tooltip" title="Edit Data">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url('kelas/hapus/') . $m->id_kelas; ?>" onclick="return confirm('Apakah yakin data kelas ini akan dihapus?')" class="btn btn-danger btn-sm action-btn" data-toggle="tooltip" title="Hapus Data">
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

<!-- Modal untuk tambah data -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 5px; overflow: hidden;">
      <div class="modal-header modal-header-custom">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Data Kelas</h4>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url('kelas/kelas_aksi'); ?>">
        <div class="modal-body">
          <div class="form-group">
            <label><i class="fa fa-th-list"></i> Nama Kelas</label>
            <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Nama Kelas" required="">
            <?= form_error('nama_kelas', '<small class="text-danger">', '</small>'); ?>
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
  $(function() {
    // Inisialisasi AOS
    AOS.init({
      duration: 800,
      once: true
    });
    
    // Inisialisasi DataTable
    $('#data').DataTable({
      responsive: true,
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