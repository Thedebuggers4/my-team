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
  
  .form-container {
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 20px;
    margin-bottom: 30px;
  }
  
  .form-header {
    background: #E8F5E9;
    padding: 15px;
    margin: -20px -20px 20px -20px;
    border-radius: 5px 5px 0 0;
    border-bottom: 1px solid #C8E6C9;
    text-align: center;
  }
  
  .form-control {
    border-radius: 4px;
    border: 1px solid #ddd;
    box-shadow: none;
    padding: 10px 12px;
    transition: all 0.3s;
    width: 100%;
  }
  
  .form-control:focus {
    border-color: #2E7D32;
    box-shadow: 0 0 5px rgba(46, 125, 50, 0.3);
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    font-weight: 600;
    color: #555;
    margin-bottom: 8px;
    display: block;
  }
  
  .input-group {
    width: 100%;
    margin-bottom: 15px;
  }
  
  .input-group-addon {
    background-color: #E8F5E9;
    border-color: #ddd;
    color: #2E7D32;
  }
  
  .select2-container {
    width: 100% !important;
  }
  
  .btn-gradient-success {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    border: none;
    color: white;
    padding: 8px 20px;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-gradient-success:hover {
    background: linear-gradient(to right, #2E7D32, #1B5E20);
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
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  .button-group {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
    margin-top: 20px;
  }
  
  .section-title {
    font-size: 16px;
    font-weight: 600;
    color: #2E7D32;
    margin-bottom: 15px;
    border-bottom: 1px solid #E8F5E9;
    padding-bottom: 10px;
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
    }
    
    .form-header {
      padding: 10px;
      margin: -15px -15px 15px -15px;
    }
    
    .form-group label {
      font-size: 14px;
    }
    
    .button-group {
      flex-direction: column;
      gap: 10px;
    }
    
    .button-group .btn {
      width: 100%;
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
                <h2><i class="fa fa-edit"></i> Edit Peserta Ujian</h2>
                <p>Perbarui informasi peserta ujian online</p>
            </div>
            
            <?php foreach ($peserta as $p) { ?>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="form-container" data-aos="fade-up">
                        <div class="form-header">
                            <h4 style="margin: 0; color: #2E7D32;"><i class="fa fa-user-circle"></i> Form Edit Peserta Ujian</h4>
                        </div>
                        
                        <!-- Form edit peserta ujian -->
                        <form action="<?= base_url('peserta/update'); ?>" method="post">
                            <div class="form-body">
                                <input type="hidden" name="id" value="<?= $p->id_peserta ?>">
                                
                                <div class="section-title">
                                    <i class="fa fa-user"></i> Data Peserta
                                </div>
                                
                                <div class="form-group">
                                    <label><i class="fa fa-user"></i> Nama Peserta</label>
                                    <select class="select2 form-control" name="peserta" required>
                                        <option selected disabled>- Pilih Peserta Ujian -</option>
                                        <?php foreach ($siswa as $a) { ?>
                                            <option value="<?= $a->id_siswa ?>" <?php if ($a->nama_siswa == $p->nama_siswa) {echo "selected='selected'";} ?>><?= $a->nis; ?> | <?= $a->nama_siswa; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label><i class="fa fa-book"></i> Mata Pelajaran</label>
                                    <select class="select2 form-control" name="mapel" required>
                                        <option selected disabled>- Pilih Mata Pelajaran Ujian -</option>
                                        <?php foreach ($mapel as $a) { ?>
                                            <option value="<?= $a->id_matapelajaran ?>" <?php if ($p->nama_matapelajaran == $a->nama_matapelajaran) { echo "selected='selected'";} ?>><?= $a->kode_matapelajaran; ?> | <?= $a->nama_matapelajaran; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="section-title">
                                    <i class="fa fa-calendar-check-o"></i> Waktu Ujian
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-calendar"></i> Tanggal Ujian</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" id="datepicker" name="tanggal" value="<?= $p->tanggal_ujian ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-clock-o"></i> Jam Ujian</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control" id="timepicker" name="jam" value="<?= $p->jam_ujian ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-list-alt"></i> Jenis Ujian</label>
                                            <select class="select2 form-control" name="jenis" required>
                                                <option selected disabled>- Pilih Jenis Ujian -</option>
                                                <?php foreach ($jenis_ujian as $a) { ?>
                                                    <option value="<?= $a->id_jenis_ujian ?>" <?php if ($p->jenis_ujian == $a->jenis_ujian) { echo "selected='selected'";} ?>><?= $a->jenis_ujian; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-hourglass-half"></i> Durasi Ujian (Menit)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control" name="durasi_ujian" value="<?= $p->durasi_ujian ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <hr style="border-top: 1px solid #eee;">
                                
                                <div class="button-group">
                                    <button type="button" class="btn btn-default" onclick="return history.go(-1)">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </button>
                                    <button type="submit" class="btn btn-gradient-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form edit peserta ujian -->
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
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
            placeholder: function() {
                return $(this).data('placeholder');
            },
            allowClear: true
        });
        
        // Inisialisasi datepicker
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: "bottom auto"
        });
        
        // Inisialisasi timepicker
        $('#timepicker').timepicker({
            showInputs: false,
            showMeridian: false
        });
    });

    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>