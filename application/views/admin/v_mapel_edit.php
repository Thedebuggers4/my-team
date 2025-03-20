<?php 
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  /* Styling untuk halaman edit mata pelajaran */
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
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .control-label {
    font-weight: 600;
    color: #2c3e50;
  }
  
  .form-control {
    height: auto;
    padding: 10px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
    box-shadow: none;
    transition: all 0.3s ease;
  }
  
  .form-control:focus {
    border-color: #3c8dbc;
    box-shadow: 0 0 0 2px rgba(60, 141, 188, 0.2);
  }
  
  .btn-action {
    padding: 10px 20px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    margin-right: 10px;
  }
  
  .btn-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .btn-primary {
    background: linear-gradient(to right, #3c8dbc, #367fa9);
    border: none;
  }
  
  .btn-default {
    background: #f4f4f4;
    color: #444;
    border: 1px solid #ddd;
  }
  
  /* Responsif untuk mobile */
  @media (max-width: 768px) {
    .btn-action {
      margin-bottom: 10px;
      width: 100%;
    }
    
    .form-group {
      margin-bottom: 15px;
    }
    
    .control-label {
      margin-bottom: 8px;
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
    Edit Mata Pelajaran
    <small class="page-subtitle">Perbarui data mata pelajaran</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('matapelajaran') ?>">Mata Pelajaran</a></li>
    <li class="active">Edit Mata Pelajaran</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
<div class="row">
    <div class="col-md-12">
        <div class="card-mapel" data-aos="fade-up">
            <div class="card-header">
                <h3 class="card-title"><i class="fa fa-edit"></i> Form Edit Mata Pelajaran</h3>
            </div>
            <!-- /.box-header -->
            <?php foreach($mapel as $a) { ?>
            <!-- form start -->
            <div class="card-body">
              <form action="<?=base_url('matapelajaran/update');?>" method="post">
                <div class="row">
                  <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                    <div class="form-group">
                      <label class="control-label">Kode Mata Pelajaran</label>
                      <input type="hidden" name="id" value="<?= $a->id_matapelajaran;?>">
                      <input type="text" class="form-control" name="kode" value="<?= $a->kode_matapelajaran;?>" required>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label">Nama Mata Pelajaran</label>
                      <input type="text" class="form-control" name="nama" value="<?= $a->nama_matapelajaran;?>" required>
                    </div>
                    
                    <div class="form-group text-right">
                      <a href="<?=base_url('matapelajaran')?>" class="btn btn-default btn-action">
                        <i class="fa fa-arrow-left"></i> Batal
                      </a>
                      <button type="submit" class="btn btn-primary btn-action">
                        <i class="fa fa-save"></i> Simpan
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

</section><!-- /.content -->

<?php 
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->

<script type="text/javascript">
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>