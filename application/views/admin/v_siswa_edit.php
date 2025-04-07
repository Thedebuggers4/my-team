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
  
  .form-container {
    background: white;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    padding: 20px;
    margin-bottom: 30px;
  }
  
  .form-header {
    background: #f9f9f9;
    padding: 15px;
    margin: -20px -20px 20px -20px;
    border-radius: 5px 5px 0 0;
    border-bottom: 1px solid #eee;
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
    padding: 10px 12px;
    transition: all 0.3s;
  }
  
  .form-control:focus {
    border-color: #3c8dbc;
    box-shadow: 0 0 5px rgba(60, 141, 188, 0.3);
  }
  
  .btn-gradient-primary {
    background: linear-gradient(to right, #3c8dbc, #2980b9);
    border: none;
    color: white;
    padding: 8px 20px;
    border-radius: 4px;
    transition: all 0.3s;
  }
  
  .btn-gradient-primary:hover {
    background: linear-gradient(to right, #2980b9, #2c3e50);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
  }
  
  .icon-input {
    position: relative;
  }
  
  .icon-input i {
    position: absolute;
    left: 10px;
    top: 14px;
    color: #999;
  }
  
  .icon-input input {
    padding-left: 35px;
  }

  .password-strength-meter {
    height: 5px;
    width: 100%;
    background-color: #e0e0e0;
    border-radius: 3px;
    margin-top: 10px;
    overflow: hidden;
  }

  .password-strength-meter-fill {
    height: 100%;
    width: 0;
    transition: width 0.3s ease, background-color 0.3s ease;
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
        <h2><i class="fa fa-user-edit"></i> Edit Data Siswa</h2>
        <p>Perbarui informasi siswa untuk sistem ujian online</p>
      </div>
      
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="form-container" data-aos="fade-up">
            <div class="form-header">
              <h4 class="text-center" style="margin: 0; color: #3c8dbc;"><i class="fa fa-edit"></i> Form Edit Siswa</h4>
            </div>
            
            <?php foreach($siswa as $a) { ?>
              <!-- form start -->
              <form action="<?=base_url('siswa/update');?>" method="post">
                <div class="form-body" data-aos="fade-up" data-aos-delay="100">
                  <input type="hidden" name="id" value="<?= $a->id_siswa;?>">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><i class="fa fa-user"></i> Nama Siswa</label>
                        <input type="text" class="form-control" name="nama" value="<?= $a->nama_siswa;?>" placeholder="Masukkan nama lengkap siswa" required>
                      </div>
                      
                      <div class="form-group">
                        <label><i class="fa fa-id-card"></i> NIS (Nomor Induk Siswa)</label>
                        <input type="text" class="form-control" name="nis" value="<?= $a->nis;?>" placeholder="Masukkan Nomor Induk Siswa" required>
                      </div>
                      
                      <div class="form-group">
                        <label><i class="fa fa-th-list"></i> Kelas</label>
                        <select class="select2 form-control" name="kelas" required="">
                          <?php foreach($kelas as $k) { ?>
                            <option value="<?=$k->id_kelas?>" <?php if($a->nama_kelas==$k->nama_kelas){echo "selected='selected'";} ?>><?= $k->nama_kelas;?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group">
                        <label><i class="fa fa-user-circle"></i> Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $a->username;?>" placeholder="Masukkan username untuk login" required>
                      </div>
                      
                      <div class="form-group">
                        <label><i class="fa fa-lock"></i> Password</label>
                        <div class="input-group">
                          <input type="password" class="form-control" name="password" id="password" value="<?= $a->password;?>" placeholder="Masukkan password" required>
                          <span class="input-group-addon" onclick="togglePassword()">
                            <i class="fa fa-eye-slash" id="eye-icon"></i>
                          </span>
                        </div>
                        <div class="password-strength-meter">
                          <div class="password-strength-meter-fill" id="strength-meter-fill"></div>
                        </div>
                        <div class="password-strength-text" id="password-strength" style="font-size: 12px; font-weight: 600; margin-top: 5px;"></div>
                      </div>
                    </div>
                  </div>
                  
                  <hr style="border-top: 1px solid #eee;">
                  
                  <div class="form-group text-right">
                    <a href="<?=base_url('siswa')?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="300">
                      <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-gradient-primary" data-aos="zoom-in" data-aos-delay="300">
                      <i class="fa fa-save"></i> Simpan Perubahan
                    </button>
                  </div>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>
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
      width: '100%'
    });
    
    // Cek kekuatan password saat halaman dimuat
    checkPasswordStrength();
    
    // Cek kekuatan password saat password diubah
    $('#password').on('input', function() {
      checkPasswordStrength();
    });
  });
  
  // Fungsi untuk toggle visibility password
  function togglePassword() {
    var passwordInput = document.getElementById('password');
    var eyeIcon = document.getElementById('eye-icon');
    
    if (passwordInput.type === 'password') {
      passwordInput.type = 'text';
      eyeIcon.className = 'fa fa-eye';
    } else {
      passwordInput.type = 'password';
      eyeIcon.className = 'fa fa-eye-slash';
    }
  }
  
  // Fungsi untuk mengukur kekuatan password
  function checkPasswordStrength() {
    var password = document.getElementById('password').value;
    var strength = 0;
    var meterFill = document.getElementById('strength-meter-fill');
    var strengthText = document.getElementById('password-strength');
    
    if (password.length >= 6) strength += 1;
    if (password.match(/[a-z]+/)) strength += 1;
    if (password.match(/[A-Z]+/)) strength += 1;
    if (password.match(/[0-9]+/)) strength += 1;
    if (password.match(/[^a-zA-Z0-9]+/)) strength += 1;
    
    switch (strength) {
      case 0:
        meterFill.style.width = '0%';
        meterFill.style.backgroundColor = '#e0e0e0';
        strengthText.textContent = '';
        break;
      case 1:
        meterFill.style.width = '20%';
        meterFill.style.backgroundColor = '#e74c3c';
        strengthText.textContent = 'Sangat Lemah';
        strengthText.style.color = '#e74c3c';
        break;
      case 2:
        meterFill.style.width = '40%';
        meterFill.style.backgroundColor = '#e67e22';
        strengthText.textContent = 'Lemah';
        strengthText.style.color = '#e67e22';
        break;
      case 3:
        meterFill.style.width = '60%';
        meterFill.style.backgroundColor = '#f1c40f';
        strengthText.textContent = 'Sedang';
        strengthText.style.color = '#f1c40f';
        break;
      case 4:
        meterFill.style.width = '80%';
        meterFill.style.backgroundColor = '#3498db';
        strengthText.textContent = 'Kuat';
        strengthText.style.color = '#3498db';
        break;
      case 5:
        meterFill.style.width = '100%';
        meterFill.style.backgroundColor = '#2ecc71';
        strengthText.textContent = 'Sangat Kuat';
        strengthText.style.color = '#2ecc71';
        break;
    }
  }

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>