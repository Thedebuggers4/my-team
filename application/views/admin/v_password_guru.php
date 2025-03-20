<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .password-header {
    background: linear-gradient(120deg, #3c8dbc, #367fa9);
    color: white;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  .password-title {
    font-size: 24px;
    margin: 0;
    font-weight: 600;
  }
  .password-subtitle {
    font-size: 14px;
    opacity: 0.8;
    margin-top: 5px;
  }
  .password-form {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    margin-bottom: 30px;
  }
  .password-form label {
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 10px;
    display: block;
  }
  .password-input {
    position: relative;
    margin-bottom: 25px;
  }
  .password-input input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #e0e0e0;
    border-radius: 5px;
    font-size: 14px;
    transition: all 0.3s ease;
  }
  .password-input input:focus {
    border-color: #3c8dbc;
    box-shadow: 0 0 0 2px rgba(60, 141, 188, 0.2);
    outline: none;
  }
  .password-input i {
    position: relative;
    color: #95a5a6;
    cursor: pointer;
  }
  .password-button {
    background: linear-gradient(to right, #3c8dbc, #367fa9);
    border: none;
    color: white;
    padding: 12px 25px;
    border-radius: 5px;
    font-weight: 600;
    box-shadow: 0 3px 10px rgba(60, 141, 188, 0.3);
    transition: all 0.3s ease;
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 14px;
  }
  .password-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(60, 141, 188, 0.4);
  }
  .error-message {
    color: #e74c3c;
    font-size: 12px;
    margin-top: 5px;
    display: block;
  }
  
  /* Media queries untuk tampilan mobile */
  @media (max-width: 768px) {
    .password-form {
      padding: 20px;
    }
    .password-header {
      text-align: center;
    }
    .password-button {
      width: 100%;
      padding: 15px;
    }
  }
  .tips-container {
    margin-top: 20px;
    background: #f8f9fa;
    border-left: 4px solid #3c8dbc;
    padding: 15px;
    border-radius: 5px;
  }
  .tips-container h4 {
    color: #3c8dbc;
    margin-top: 0;
  }
  .tips-container ul {
    padding-left: 20px;
  }
  .tips-container li {
    margin-bottom: 5px;
    font-size: 13px;
    color: #555;
  }
  
  /* Style untuk indikator kekuatan password */
  .password-strength-meter {
    height: 5px;
    background-color: #f0f0f0;
    margin: 10px 0 5px;
    border-radius: 3px;
    overflow: hidden;
  }
  .password-strength-meter-fill {
    height: 100%;
    width: 0;
    transition: width 0.3s ease, background-color 0.3s ease;
  }
  .password-strength-text {
    font-size: 12px;
    font-weight: 600;
    margin-top: 5px;
  }
  .very-weak {
    width: 20%;
    background-color: #e74c3c;
  }
  .weak {
    width: 40%;
    background-color: #f39c12;
  }
  .medium {
    width: 60%;
    background-color: #3498db;
  }
  .strong {
    width: 80%;
    background-color: #2ecc71;
  }
  .very-strong {
    width: 100%;
    background-color: #27ae60;
  }
</style>

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1 class="animate__animated animate__fadeInDown">
    Ganti Password
    <small>Pengaturan Keamanan Akun</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home_guru') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Ganti Password</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
  <div class="row">
    <div class="col-md-12">
      <!-- Header Info -->
      <div class="password-header" data-aos="fade-down">
        <h3 class="password-title"><i class="fa fa-lock"></i> Ganti Password</h3>
        <p class="password-subtitle">Gunakan kombinasi huruf, angka, dan simbol untuk keamanan yang lebih baik.</p>
      </div>
      
      <!-- Password Form -->
      <div class="password-form" data-aos="fade-up" data-aos-delay="200">
        <form action="<?= base_url('password'); ?>" method="post">
          <div class="row">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
              <div class="password-input">
                <label for="password1">Password Baru</label>
                <div class="input-group">
                  <input type="password" id="password1" class="form-control" placeholder="Masukkan Password Baru" name="password1" autocomplete="off">
                  <span class="input-group-addon password-toggle" onclick="togglePassword('password1')">
                    <i class="fa fa-eye-slash"></i>
                  </span>
                </div>
                <?= form_error('password1', '<small class="error-message">', '</small>'); ?>
                <div class="password-strength-meter">
                  <div class="password-strength-meter-fill" id="password-strength-meter-fill"></div>
                </div>
                <div class="password-strength-text" id="password-strength-text"></div>
              </div>
              
              <div class="password-input">
                <label for="password2">Ulangi Password</label>
                <div class="input-group">
                  <input type="password" id="password2" class="form-control" placeholder="Ulangi Password Baru" name="password2" autocomplete="off">
                  <span class="input-group-addon password-toggle" onclick="togglePassword('password2')">
                    <i class="fa fa-eye-slash"></i>
                  </span>
                </div>
                <div class="password-match mt-2" id="password-match"></div>
              </div>
              
              <div class="form-group">
                <button type="submit" class="password-button" data-aos="zoom-in" data-aos-delay="400">
                  <i class="fa fa-save"></i> Simpan
                </button>
              </div>
            </div>
            
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
              <div class="tips-container">
                <h4><i class="fa fa-lightbulb-o"></i> Tips Keamanan Password</h4>
                <ul>
                  <li>Gunakan minimal 8 karakter</li>
                  <li>Kombinasikan huruf besar dan kecil</li>
                  <li>Sertakan angka dalam password</li>
                  <li>Tambahkan karakter khusus seperti @, #, $, !</li>
                  <li>Hindari menggunakan informasi pribadi yang mudah ditebak</li>
                  <li>Jangan gunakan password yang sama untuk akun lain</li>
                </ul>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section><!-- /.content -->

<?php
$this->load->view('admin/js');
?>
<!--tambahkan custom js disini-->
<script type="text/javascript">
  // Toggle tampilan password
  function togglePassword(id) {
    var passwordField = document.getElementById(id);
    var toggleIcon = passwordField.parentNode.querySelector('.password-toggle i');
    
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      toggleIcon.classList.remove('fa-eye-slash');
      toggleIcon.classList.add('fa-eye');
    } else {
      passwordField.type = 'password';
      toggleIcon.classList.remove('fa-eye');
      toggleIcon.classList.add('fa-eye-slash');
    }
  }
  
  // Validasi kekuatan password
  $('#password1').on('keyup', function() {
    var password = $(this).val();
    var strength = 0;
    
    if (password.length > 6) strength += 1;
    if (password.match(/[a-z]+/)) strength += 1;
    if (password.match(/[A-Z]+/)) strength += 1;
    if (password.match(/[0-9]+/)) strength += 1;
    if (password.match(/[$@#&!]+/)) strength += 1;
    
    var meterFill = $('#password-strength-meter-fill');
    var strengthText = $('#password-strength-text');
    
    // Reset classes
    meterFill.removeClass('very-weak weak medium strong very-strong');
    
    switch (strength) {
      case 0:
        if (password.length === 0) {
          meterFill.css('width', '0');
          strengthText.html('');
        } else {
          meterFill.addClass('very-weak');
          strengthText.html('<span style="color: #e74c3c">Sangat Lemah</span>');
        }
        break;
      case 1:
        meterFill.addClass('very-weak');
        strengthText.html('<span style="color: #e74c3c">Sangat Lemah</span>');
        break;
      case 2:
        meterFill.addClass('weak');
        strengthText.html('<span style="color: #f39c12">Lemah</span>');
        break;
      case 3:
        meterFill.addClass('medium');
        strengthText.html('<span style="color: #3498db">Sedang</span>');
        break;
      case 4:
        meterFill.addClass('strong');
        strengthText.html('<span style="color: #2ecc71">Kuat</span>');
        break;
      case 5:
        meterFill.addClass('very-strong');
        strengthText.html('<span style="color: #27ae60">Sangat Kuat</span>');
        break;
    }
  });
  
  // Cek kecocokan password
  $('#password2').on('keyup', function() {
    var password1 = $('#password1').val();
    var password2 = $(this).val();
    
    if (password2 === '') {
      $('#password-match').html('');
    } else if (password1 === password2) {
      $('#password-match').html('<span style="color: #2ecc71">Password cocok</span>');
    } else {
      $('#password-match').html('<span style="color: #e74c3c">Password tidak cocok</span>');
    }
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>