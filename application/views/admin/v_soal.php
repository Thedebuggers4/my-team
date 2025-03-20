<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  /* Styling untuk halaman tambah soal */
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
    text-align: center;
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
  
  textarea.form-control {
    min-height: 80px;
    resize: vertical;
  }
  
  .select2-container--default .select2-selection--single {
    height: 42px;
    padding: 6px 12px;
    border: 1px solid #e0e0e0;
    border-radius: 4px;
  }
  
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 40px;
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
  
  .section-title {
    font-size: 18px;
    font-weight: 600;
    color: #3c8dbc;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 1px solid #f4f4f4;
  }
  
  .jawaban-section {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
  }
  
  .kunci-section {
    background: #f0f7ff;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
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
    Tambah Soal Ujian
    <small class="page-subtitle">Buat soal ujian baru untuk siswa</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('soal_ujian') ?>">Soal Ujian</a></li>
    <li class="active">Tambah Soal</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
    <div class="row">
        <div class="col-md-12">
            <div class="card-soal" data-aos="fade-up">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-plus-circle"></i> Form Tambah Soal Ujian</h3>
                </div>
                
                <!-- Form untuk tambah soal ujian -->
                <form action="<?= base_url('soal/insert'); ?>" method="post">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                                <div class="form-group">
                                    <label class="control-label">Mata Pelajaran</label>
                                    <select class="select2 form-control" name="nama_matapelajaran" required>
                                        <option selected="selected" disabled value="">- Pilih Mata Pelajaran -</option>
                                        <?php foreach ($soal as $a) { ?>
                                            <option value="<?= $a->id_matapelajaran ?>" <?= set_value('nama_matapelajaran') == $a->id_matapelajaran ? 'selected' : '' ?>><?= $a->kode_matapelajaran; ?> | <?= $a->nama_matapelajaran; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                                <div class="form-group">
                                    <label class="control-label">Pertanyaan Soal</label>
                                    <textarea class="form-control" name="soal" placeholder="Tulis pertanyaan soal di sini..." required><?= set_value('soal'); ?></textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                                <h4 class="section-title"><i class="fa fa-list-ol"></i> Pilihan Jawaban</h4>
                                <div class="jawaban-section">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Jawaban A</label>
                                                <textarea class="form-control" rows="2" name="a" placeholder="Opsi jawaban A" required><?= set_value('a'); ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label">Jawaban B</label>
                                                <textarea class="form-control" rows="2" name="b" placeholder="Opsi jawaban B" required><?= set_value('b'); ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label">Jawaban C</label>
                                                <textarea class="form-control" rows="2" name="c" placeholder="Opsi jawaban C" required><?= set_value('c'); ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Jawaban D</label>
                                                <textarea class="form-control" rows="2" name="d" placeholder="Opsi jawaban D" required><?= set_value('d'); ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="control-label">Jawaban E</label>
                                                <textarea class="form-control" rows="2" name="e" placeholder="Opsi jawaban E" required><?= set_value('e'); ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="kunci-section">
                                    <div class="form-group">
                                        <label class="control-label">Kunci Jawaban</label>
                                        <select class="form-control" name="kunci" required>
                                            <option selected="selected" disabled value="">- Pilih Kunci Jawaban -</option>
                                            <option value="A" <?= set_value('kunci') == 'A' ? 'selected' : '' ?>>A</option>
                                            <option value="B" <?= set_value('kunci') == 'B' ? 'selected' : '' ?>>B</option>
                                            <option value="C" <?= set_value('kunci') == 'C' ? 'selected' : '' ?>>C</option>
                                            <option value="D" <?= set_value('kunci') == 'D' ? 'selected' : '' ?>>D</option>
                                            <option value="E" <?= set_value('kunci') == 'E' ? 'selected' : '' ?>>E</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 text-right" data-aos="fade-up" data-aos-delay="500">
                                <a href="<?= base_url('soal_ujian') ?>" class="btn btn-default btn-action">
                                    <i class="fa fa-arrow-left"></i> Kembali
                                </a>
                                <button type="submit" class="btn btn-primary btn-action">
                                    <i class="fa fa-save"></i> Simpan Soal
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /Form untuk tambah soal ujian -->
            </div>
        </div>
    </div>
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript">
    $(function() {
        // Initialize select2
        $('.select2').select2({
            placeholder: "Pilih mata pelajaran",
            allowClear: true
        });
        
        // Initialize datatables
        $('#data-tables').dataTable();
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>
