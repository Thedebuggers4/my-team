<?php 
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  /* Guru Edit Form Styling */
  .guru-edit-header {
    background: linear-gradient(120deg, #00a65a, #008d4c);
    color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
  }
  
  .guru-edit-header h2 {
    font-weight: 600;
    margin-top: 0;
    position: relative;
    z-index: 1;
  }
  
  .guru-edit-header p {
    opacity: 0.9;
    margin-bottom: 0;
    position: relative;
    z-index: 1;
  }
  
  .guru-edit-header::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    transform: skewX(-15deg);
  }
  
  .edit-box {
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    border: none;
    background: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .edit-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }
  
  .edit-box-header {
    position: relative;
    padding: 20px;
    border-bottom: 1px solid #f4f4f4;
  }
  
  .edit-box-header h3 {
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
  }
  
  .edit-form {
    padding: 25px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
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
    border-color: #00a65a;
    box-shadow: 0 0 0 2px rgba(0,166,90,0.15);
  }
  
  .form-control::placeholder {
    color: #aaa;
  }
  
  /* Password strength indicator styles */
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
  
  .btn-action-group {
    margin-top: 25px;
    display: flex;
    gap: 10px;
  }
  
  .btn-cancel {
    background: linear-gradient(to right, #b5bbc8, #9aa5b1);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(155,160,170,0.3);
  }
  
  .btn-cancel:hover, .btn-cancel:focus {
    background: linear-gradient(to right, #9aa5b1, #b5bbc8);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(155,160,170,0.4);
  }
  
  .btn-save {
    background: linear-gradient(to right, #00a65a, #008d4c);
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(0,166,90,0.3);
  }
  
  .btn-save:hover, .btn-save:focus {
    background: linear-gradient(to right, #008d4c, #00a65a);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,166,90,0.4);
  }
  
  /* Responsive adjustments */
  @media (max-width: 767px) {
    .edit-form {
      padding: 15px;
    }
    
    .btn-action-group {
      flex-direction: column;
    }
    
    .btn-action-group .btn {
      margin-bottom: 10px;
      width: 100%;
    }
  }
</style>

<?php
$this->load->view('admin/topbar');
$this->load->view('admin/sidebar');
?>

<!-- Content Header -->
<section class="content-header">
  <h1 class="animate__animated animate__fadeInDown">
    Edit Data Guru
    <small>Perbarui Informasi Pengajar</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="<?php echo base_url('guru') ?>"><i class="fa fa-users"></i> Data Guru</a></li>
    <li class="active">Edit Guru</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
  <!-- Header card -->
  <div class="guru-edit-header" data-aos="fade-up">
    <div class="row">
      <div class="col-md-8">
        <h2><i class="fa fa-user-edit"></i> Edit Data Guru</h2>
        <p>Silahkan perbarui informasi guru dengan lengkap dan akurat</p>
      </div>
      <div class="col-md-4 text-right">
        <div class="hidden-xs">
          <i class="fa fa-pencil-square-o" style="font-size: 80px; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!-- Edit form box -->
      <div class="edit-box" data-aos="fade-up" data-aos-delay="200">
        <div class="edit-box-header">
          <h3><i class="fa fa-edit"></i> Formulir Edit Data</h3>
        </div>

        <?php foreach($guru as $a) { ?>
        <div class="edit-form">
          <form action="<?=base_url('guru/update');?>" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nik"><i class="fa fa-id-card"></i> NIK (Nomor Induk Kepegawaian)</label>
                  <input type="number" class="form-control" id="nik" name="nik" value="<?= $a->id_guru;?>" required>
                </div>

                <div class="form-group">
                  <label for="nama"><i class="fa fa-user"></i> Nama Guru</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $a->nama_guru;?>" required>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="username"><i class="fa fa-user-circle"></i> Username</label>
                  <input type="text" class="form-control" id="username" name="username" value="<?= $a->username;?>" required>
                </div>

                <div class="form-group">
                  <label for="password"><i class="fa fa-lock"></i> Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" value="<?= $a->password;?>" required>
                    <span class="input-group-addon" onclick="togglePassword()">
                      <i class="fa fa-eye-slash" id="eye-icon"></i>
                    </span>
                  </div>
                  <div class="password-strength-meter">
                    <div class="password-strength-meter-fill" id="strength-meter-fill"></div>
                  </div>
                  <div class="password-strength-text" id="password-strength"></div>
                </div>
              </div>
            </div>
            
            <div class="btn-action-group">
              <a href="<?=base_url('guru')?>" class="btn btn-cancel">
                <i class="fa fa-arrow-left"></i> Kembali
              </a>
              <button type="submit" class="btn btn-save">
                <i class="fa fa-save"></i> Simpan Perubahan
              </button>
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
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Initialize AOS
    AOS.init({
      duration: 800,
      once: true
    });
    
    // Cek kekuatan password saat halaman dimuat
    checkPasswordStrength($('#password').val());
  });
  
  // Toggle password visibility
  function togglePassword() {
    var passwordField = document.getElementById('password');
    var eyeIcon = document.getElementById('eye-icon');
    
    if (passwordField.type === 'password') {
      passwordField.type = 'text';
      eyeIcon.classList.remove('fa-eye-slash');
      eyeIcon.classList.add('fa-eye');
    } else {
      passwordField.type = 'password';
      eyeIcon.classList.remove('fa-eye');
      eyeIcon.classList.add('fa-eye-slash');
    }
  }
  
  // Validasi kekuatan password
  function checkPasswordStrength(password) {
    var strength = 0;
    
    if (password.length > 6) strength += 1;
    if (password.match(/[a-z]+/)) strength += 1;
    if (password.match(/[A-Z]+/)) strength += 1;
    if (password.match(/[0-9]+/)) strength += 1;
    if (password.match(/[$@#&!]+/)) strength += 1;
    
    var strengthMeter = $('#strength-meter-fill');
    var strengthText = $('#password-strength');
    
    // Reset classes
    strengthMeter.removeClass('very-weak weak medium strong very-strong');
    
    switch (strength) {
      case 0:
        if (password.length === 0) {
          strengthMeter.css('width', '0');
          strengthText.html('');
        } else {
          strengthMeter.addClass('very-weak');
          strengthText.html('<span style="color: #e74c3c">Sangat Lemah</span>');
        }
        break;
      case 1:
        strengthMeter.addClass('very-weak');
        strengthText.html('<span style="color: #e74c3c">Sangat Lemah</span>');
        break;
      case 2:
        strengthMeter.addClass('weak');
        strengthText.html('<span style="color: #f39c12">Lemah</span>');
        break;
      case 3:
        strengthMeter.addClass('medium');
        strengthText.html('<span style="color: #3498db">Sedang</span>');
        break;
      case 4:
        strengthMeter.addClass('strong');
        strengthText.html('<span style="color: #2ecc71">Kuat</span>');
        break;
      case 5:
        strengthMeter.addClass('very-strong');
        strengthText.html('<span style="color: #27ae60">Sangat Kuat</span>');
        break;
    }
  }
  
  // Cek kekuatan password saat input berubah
  $('#password').on('keyup', function() {
    checkPasswordStrength($(this).val());
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>