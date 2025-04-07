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
  
  /* Button container */
  .button-container {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  
  /* Modal styling */
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
        <h2><i class="fa fa-list-alt"></i> Jenis Ujian</h2>
        <p>Kelola berbagai jenis ujian untuk sistem ujian online</p>
      </div>
      
      <!-- Main content box -->
      <div class="animated-box" data-aos="fade-up">
        <div class="box-header" style="padding: 15px 20px;">
          <div class="row">
            <div class="col-md-12">
              <div class="button-container">
                <a href="<?=base_url('peserta')?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="100">
                  <i class="fa fa-arrow-left"></i> Kembali
                </a>
                <button type="button" class="btn btn-gradient-success" data-toggle="modal" data-target="#modal-data" onclick="$('#modal-data-body').load('<?= base_url('jenis_ujian/create') ?>')" data-aos="zoom-in" data-aos-delay="200">
                  <i class="fa fa-plus"></i> Tambah Jenis Ujian
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
                <th>Jenis Ujian</th>
                <th width="15%" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($jenis_ujian as $m) { ?>
                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td><strong><?php echo $m->jenis_ujian; ?></strong></td>
                  <td class="text-center">
                    <a href="<?= base_url('jenis_ujian/edit/') . $m->id_jenis_ujian; ?>" class="btn btn-gradient-success btn-sm action-btn" data-toggle="tooltip" title="Edit">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="<?= base_url('jenis_ujian/hapus/') . $m->id_jenis_ujian; ?>" onclick="return confirm('Apakah yakin data jenis ujian ini akan dihapus?')" class="btn btn-gradient-warning btn-sm action-btn" data-toggle="tooltip" title="Hapus">
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

<!-- Modal tambah jenis ujian -->
<div class="modal fade" id="modal-data">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white;">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-plus-circle"></i> Tambah Jenis Ujian</h4>
      </div>
      <div class="modal-body">
        <div id="modal-data-body">
          <div class="text-center">
            <i class="fa fa-spinner fa-spin fa-2x"></i>
            <p>Loading...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- /. modal import data siswa  -->
<div class="modal fade" id="modal-import">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Import Data siswa</h4>
      </div>
      <!-- /.form dengan modal -->
      <form action="<?= base_url('siswa/import'); ?>" method="post" class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <div class="col-sm-12">
              <a href="<?= base_url('format/format-import-data-siswa.xlsx') ?>" class="pull-right" download><i class="fa fa-download"></i> Download Format Data Import siswa</a>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">File</label>
            <div class="col-sm-10">
              <input type="file" name="file" required accept=".xls, .xlsx">
              <p class="help-block">File harus bertipe <b>.xls, .xlsx</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label">Kelas</label>
            <div class="col-sm-10">
              <select class="select2 form-control" name="kelas" required="">
                <option selected="selected" disabled="">- Pilih Kelas</option>
                <?php foreach ($kelas as $a) { ?>
                  <option value="<?= $a->id_kelas ?>"><?= $a->nama_kelas; ?></option>
                <?php } ?>
              </select>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">TUTUP</button>
          <button type="submit" class="btn btn-primary pull-right" title="Import Data siswa">Import</button>
        </div>
        <!-- /.box-footer -->
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