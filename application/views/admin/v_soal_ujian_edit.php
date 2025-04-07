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
  
  .form-container {
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 20px;
    margin-bottom: 30px;
  }
  
  .form-header {
    background: #FFF3E0;
    padding: 15px;
    margin: -20px -20px 20px -20px;
    border-radius: 5px 5px 0 0;
    border-bottom: 1px solid #FFE0B2;
  }
  
  .form-group label {
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    transition: all 0.3s;
  }
  
  .form-control:focus {
    border-color: #FF9800;
    box-shadow: 0 0 5px rgba(255, 152, 0, 0.3);
  }
  
  .btn-gradient-amber {
    background: linear-gradient(to right, #FF9800, #F57C00);
    border: none;
    color: white;
    padding: 8px 20px;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-gradient-amber:hover {
    background: linear-gradient(to right, #F57C00, #E65100);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .option-group {
    margin-bottom: 15px;
    background: #FFF8E1;
    border-radius: 5px;
    padding: 15px;
    border-left: 3px solid #FFC107;
    display: flex;
    align-items: center;
    width: 100%;
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
  }
  
  .jawaban-heading {
    background: #FBE9E7;
    padding: 10px 15px;
    border-radius: 4px;
    font-weight: 600;
    color: #D84315;
    margin-bottom: 15px;
  }
  
  textarea.form-control {
    min-height: 100px;
    resize: vertical;
    width: 100%;
    flex-grow: 1;
  }
  
  @media (max-width: 768px) {
    .content-header-custom {
      padding: 10px;
    }
    .form-container {
      padding: 15px;
    }
    .form-header {
      padding: 10px;
      margin: -15px -15px 15px -15px;
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
                <h2><i class="fa fa-edit"></i> Edit Soal Ujian</h2>
                <p>Perbarui informasi soal untuk sistem ujian online</p>
            </div>

            <?php foreach($soal as $s) { ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-container" data-aos="fade-up">
                        <div class="form-header">
                            <h4 class="text-center" style="margin: 0; color: #E65100;"><i class="fa fa-question-circle"></i> Form Edit Soal</h4>
                        </div>
                        <form action="<?= base_url('soal_ujian/update'); ?>" method="post">
                            <div class="form-body" data-aos="fade-up" data-aos-delay="100">
                                <input type="hidden" name="id" value="<?= $s->id_soal_ujian ?>">
                                
                                <div class="form-group">
                                    <label><i class="fa fa-book"></i> Mata Pelajaran</label>
                                    <select class="select2 form-control" name="nama_matapelajaran" required>
                                        <option selected="selected" disabled>- Pilih Mata Pelajaran -</option>
                                        <?php foreach ($kelas as $a) { ?>
                                            <option value="<?= $a->id_matapelajaran ?>" <?= $s->id_matapelajaran == $a->id_matapelajaran ? 'selected' : '' ?>><?= $a->kode_matapelajaran; ?> | <?= $a->nama_matapelajaran; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label><i class="fa fa-file-text"></i> Pertanyaan</label>
                                    <textarea name="soal" class="form-control" required><?= $s->pertanyaan; ?></textarea>
                                </div>
                                
                                <div class="jawaban-heading">
                                    <i class="fa fa-list"></i> Opsi Jawaban
                                </div>
                                
                                <div class="jawaban-group">
                                    <div class="option-group">
                                        <span class="option-label">A</span>
                                        <textarea rows="2" class="form-control" name="a" required><?= $s->a; ?></textarea>
                                    </div>
                                    
                                    <div class="option-group">
                                        <span class="option-label">B</span>
                                        <textarea rows="2" class="form-control" name="b" required><?= $s->b; ?></textarea>
                                    </div>
                                    
                                    <div class="option-group">
                                        <span class="option-label">C</span>
                                        <textarea rows="2" class="form-control" name="c" required><?= $s->c; ?></textarea>
                                    </div>
                                    
                                    <div class="option-group">
                                        <span class="option-label">D</span>
                                        <textarea rows="2" class="form-control" name="d" required><?= $s->d; ?></textarea>
                                    </div>
                                    
                                    <div class="option-group">
                                        <span class="option-label">E</span>
                                        <textarea rows="2" class="form-control" name="e" required><?= $s->e; ?></textarea>
                                    </div>
                                </div>
                                
                                <div class="form-group" style="margin-top: 15px;">
                                    <label><i class="fa fa-check-circle"></i> Kunci Jawaban</label>
                                    <select class="form-control" name="kunci" required>
                                        <option value="A" <?= $s->kunci_jawaban == 'A' ? 'selected' : '' ?>>A</option>
                                        <option value="B" <?= $s->kunci_jawaban == 'B' ? 'selected' : '' ?>>B</option>
                                        <option value="C" <?= $s->kunci_jawaban == 'C' ? 'selected' : '' ?>>C</option>
                                        <option value="D" <?= $s->kunci_jawaban == 'D' ? 'selected' : '' ?>>D</option>
                                        <option value="E" <?= $s->kunci_jawaban == 'E' ? 'selected' : '' ?>>E</option>
                                    </select>
                                </div>
                                
                                <hr style="border-top: 1px solid #eee;">
                                
                                <div class="form-group text-right">
                                    <button type="button" class="btn btn-default" onclick="return history.go(-1)" data-aos="zoom-in" data-aos-delay="300">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </button>
                                    <button type="submit" class="btn btn-gradient-amber" data-aos="zoom-in" data-aos-delay="300">
                                        <i class="fa fa-save"></i> Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- /.col-->
    </div>
    <!-- ./row -->
</section><!-- /.content -->

<?php 
$this->load->view('admin/js');
?>

<!-- tambahkan custom js disini -->
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
            width: '100%'
        });
    });
    
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>
