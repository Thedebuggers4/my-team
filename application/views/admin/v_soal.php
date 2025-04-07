<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #FF9800, #F57C00);
    color: white;
    padding: 15px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    width: 100%;
  }
  
  .form-container {
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 20px;
    margin-bottom: 30px;
    width: 100%;
    overflow: hidden;
  }
  
  .form-header {
    background: #FFF3E0;
    padding: 15px;
    margin: -20px -20px 20px -20px;
    border-radius: 5px 5px 0 0;
    border-bottom: 1px solid #FFE0B2;
    text-align: center;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: all 0.3s;
    width: 100% !important;
    max-width: 100%;
  }
  
  .form-control:focus {
    border-color: #FF9800;
    box-shadow: 0 0 5px rgba(255, 152, 0, 0.3);
  }
  
  .form-group {
    margin-bottom: 20px;
    width: 100%;
  }
  
  .form-group label {
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    display: block;
  }
  
  .select2-container {
    width: 100% !important;
  }
  
  .btn-gradient-amber {
    background: linear-gradient(to right, #FF9800, #F57C00);
    border: none;
    color: white;
    padding: 8px 20px;
    border-radius: 4px;
    transition: all 0.3s;
    margin-left: 5px;
  }
  
  .btn-gradient-amber:hover {
    background: linear-gradient(to right, #F57C00, #E65100);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    color: white;
  }
  
  .btn-default {
    background: #f4f4f4;
    border: 1px solid #ddd;
    color: #333;
    padding: 8px 20px;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-default:hover {
    background: #e7e7e7;
  }
  
  .option-group {
    margin-bottom: 15px;
    background: #FFF8E1;
    border-radius: 5px;
    padding: 15px;
    border-left: 3px solid #FFC107;
    position: relative;
    width: 100%;
    display: flex;
    align-items: center;
  }
  
  .option-label {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 36px;
    height: 36px;
    text-align: center;
    background: linear-gradient(135deg, #FF9800, #F57C00);
    color: white;
    border-radius: 4px;
    margin-right: 15px;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    flex-shrink: 0;
  }
  
  .jawaban-group {
    display: flex;
    flex-direction: column;
    gap: 15px;
    width: 100%;
  }
  
  .jawaban-heading {
    background: #FBE9E7;
    padding: 10px 15px;
    border-radius: 4px;
    font-weight: 600;
    color: #D84315;
    margin-bottom: 15px;
    width: 100%;
  }
  
  textarea.form-control {
    min-height: 80px;
    resize: vertical;
    width: 100%;
    flex-grow: 1;
  }
  
  .button-group {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
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
    
    .form-container {
      padding: 15px;
      margin: 0 10px 20px 10px;
      width: calc(100% - 20px);
    }
    
    .form-header {
      padding: 10px;
      margin: -15px -15px 15px -15px;
    }
    
    .form-header h4 {
      font-size: 16px;
    }
    
    .form-group label {
      font-size: 14px;
    }
    
    .option-group {
      padding: 10px;
      flex-direction: row;
      align-items: center;
    }
    
    .option-label {
      min-width: 30px;
      height: 30px;
      margin-right: 10px;
      font-size: 13px;
    }
    
    .jawaban-heading {
      font-size: 14px;
      padding: 8px 12px;
    }
    
    textarea.form-control {
      min-height: 60px;
    }
    
    .select2-container {
      width: 100% !important;
    }
    
    .button-group {
      justify-content: center;
      flex-wrap: nowrap;
    }
    
    .btn {
      width: 48%;
      margin: 5px 1%;
      padding: 8px 0;
      text-align: center;
      font-size: 12px;
    }
    
    .btn-gradient-amber, .btn-default {
      margin-left: 0;
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
                <h2><i class="fa fa-plus-circle"></i> Tambah Soal Ujian</h2>
                <p>Tambahkan soal baru untuk sistem ujian online</p>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-container" data-aos="fade-up">
                        <div class="form-header">
                            <h4 class="text-center" style="margin: 0; color: #E65100;"><i class="fa fa-question-circle"></i> Form Tambah Soal</h4>
                        </div>

                        <!-- Form untuk tambah soal ujian -->
                        <form action="<?= base_url('soal/insert'); ?>" method="post">
                            <div class="form-body">
                                <div class="form-group">
                                    <label><i class="fa fa-book"></i> Mata Pelajaran</label>
                                    <select class="select2 form-control" name="nama_matapelajaran" required>
                                        <option selected="selected" disabled value="">- Pilih Mata Pelajaran -</option>
                                        <?php foreach ($soal as $a) { ?>
                                            <option value="<?= $a->id_matapelajaran ?>" <?= set_value('nama_matapelajaran') == $a->id_matapelajaran ? 'selected' : '' ?>><?= $a->kode_matapelajaran; ?> | <?= $a->nama_matapelajaran; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label><i class="fa fa-file-text"></i> Pertanyaan</label>
                                    <textarea class="form-control" name="soal" required placeholder="Masukkan pertanyaan soal ujian disini"><?= set_value('soal'); ?></textarea>
                                </div>

                                <div class="jawaban-heading">
                                    <i class="fa fa-list"></i> Opsi Jawaban
                                </div>

                                <div class="jawaban-group">
                                    <div class="option-group">
                                        <span class="option-label">A</span>
                                        <textarea class="form-control" rows="2" name="a" required placeholder="Jawaban A"><?= set_value('a'); ?></textarea>
                                    </div>

                                    <div class="option-group">
                                        <span class="option-label">B</span>
                                        <textarea class="form-control" rows="2" name="b" required placeholder="Jawaban B"><?= set_value('b'); ?></textarea>
                                    </div>

                                    <div class="option-group">
                                        <span class="option-label">C</span>
                                        <textarea class="form-control" rows="2" name="c" required placeholder="Jawaban C"><?= set_value('c'); ?></textarea>
                                    </div>

                                    <div class="option-group">
                                        <span class="option-label">D</span>
                                        <textarea class="form-control" rows="2" name="d" required placeholder="Jawaban D"><?= set_value('d'); ?></textarea>
                                    </div>

                                    <div class="option-group">
                                        <span class="option-label">E</span>
                                        <textarea class="form-control" rows="2" name="e" required placeholder="Jawaban E"><?= set_value('e'); ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group" style="margin-top: 15px;">
                                    <label><i class="fa fa-check-circle"></i> Kunci Jawaban</label>
                                    <select class="form-control" name="kunci" required>
                                        <option selected="selected" disabled value="">- Pilih Kunci Jawaban -</option>
                                        <option value="A" <?= set_value('kunci') == 'A' ? 'selected' : '' ?>>A</option>
                                        <option value="B" <?= set_value('kunci') == 'B' ? 'selected' : '' ?>>B</option>
                                        <option value="C" <?= set_value('kunci') == 'C' ? 'selected' : '' ?>>C</option>
                                        <option value="D" <?= set_value('kunci') == 'D' ? 'selected' : '' ?>>D</option>
                                        <option value="E" <?= set_value('kunci') == 'E' ? 'selected' : '' ?>>E</option>
                                    </select>
                                </div>

                                <hr style="border-top: 1px solid #eee;">

                                <div class="button-group">
                                    <a href="<?= base_url('soal_ujian') ?>" class="btn btn-default">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-gradient-amber">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /Form untuk tambah soal ujian -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
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
        
        // Inisialisasi Select2
        $('.select2').select2({
            width: '100%',
            placeholder: "Pilih mata pelajaran",
            allowClear: true
        });
        
        // Fix untuk select2 di mobile
        $(window).resize(function() {
            $('.select2-container').css('width', '100%');
        });
        
        // Pastikan select2 responsive saat load
        $('.select2-container').css('width', '100%');
    });

    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>
