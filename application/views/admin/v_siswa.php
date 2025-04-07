<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #3c8dbc, #2c3e50);
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
  
  .btn-gradient-primary {
    background: linear-gradient(to right, #3c8dbc, #2980b9);
    border: none;
    color: white;
  }
  
  .btn-gradient-primary:hover {
    background: linear-gradient(to right, #2980b9, #2c3e50);
    color: white;
  }

  .btn-gradient-secondary {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    border: none;
    color: white;
  }
  
  .btn-gradient-secondary:hover {
    background: linear-gradient(to right, #2E7D32, #1B5E20);
    color: white;
  }
  
  .btn-gradient-warning {
    background: linear-gradient(to right, #f39c12, #e67e22);
    border: none;
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
    background: linear-gradient(to right, #3c8dbc, #2980b9);
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
    background: linear-gradient(135deg, #3c8dbc, #2980b9);
    color: white;
    border-radius: 5px 5px 0 0;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    padding: 0 15px;
    transition: all 0.3s;
  }
  
  .form-control:focus {
    border-color: #3c8dbc;
    box-shadow: 0 0 5px rgba(60, 141, 188, 0.3);
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
        <h2><i class="fa fa-users"></i> Data Siswa</h2>
        <p>Kelola dan atur data siswa untuk sistem ujian online</p>
      </div>
      
      <!-- Main content box -->
      <div class="box animated-box" style="border-radius: 5px; border-top: 3px solid #3c8dbc;" data-aos="fade-up">
        <div class="box-header" style="padding: 15px 20px;">
          <div class="row">
            <div class="col-md-12">
              <button type="button" class="btn btn-gradient-primary" data-toggle="modal" data-target="#modal-data" onclick="$('#modal-data-body').load('<?= base_url('siswa/create'); ?>')" data-aos="zoom-in" data-aos-delay="100">
                <span class="fa fa-plus"></span> Tambah
              </button>
              <a href="<?= base_url('kelas'); ?>" class="btn btn-gradient-secondary" data-aos="zoom-in" data-aos-delay="200">
                <span class="fa fa-th-list"></span> Data Kelas
              </a>
              <a href="<?= base_url('siswa'); ?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="300">
                <span class="fa fa-refresh"></span> Refresh
              </a>
            </div>
          </div>
        </div>
        
        <!-- Table content -->
        <div class="box-body table-container">
          <table id="data" class="table table-bordered table-striped data-table responsive nowrap" width="100%">
            <thead>
              <tr>
                <th width="1%">No</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Username</th>
                <th width="12%" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($siswa as $m) { ?>
                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->nis; ?></td>
                  <td><?php echo $m->nama_siswa; ?></td>
                  <td><?php echo $m->nama_kelas; ?></td>
                  <td><?php echo $m->username; ?></td>
                  <td class="text-center">
                    <a href="<?= base_url('siswa/edit/') . $m->id_siswa; ?>" class="btn btn-gradient-primary btn-sm action-btn" data-toggle="tooltip" title="Edit Data">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url('siswa/hapus/') . $m->id_siswa; ?>" onclick="return confirm('Apakah yakin data siswa ini akan dihapus?')" class="btn btn-gradient-danger btn-sm action-btn" data-toggle="tooltip" title="Hapus Data">
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

<!-- Modal tambah data siswa -->
<div class="modal fade" id="modal-data">
  <div class="modal-dialog">
    <div class="modal-content" style="border-radius: 5px; overflow: hidden;">
      <div class="modal-header modal-header-custom">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Tambah Data Siswa</h4>
      </div>
      <!-- /.form dengan modal -->
      <div class="modal-body">
        <div id="modal-data-body">
          <p>Loading...</p>
        </div>
      </div>
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