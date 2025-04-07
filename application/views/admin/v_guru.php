<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  /* Guru Data Table Styling */
  .guru-content-header {
    background: linear-gradient(120deg, #00a65a, #008d4c);
    color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    position: relative;
    overflow: hidden;
  }
  
  .guru-content-header h2 {
    font-weight: 600;
    margin-top: 0;
    position: relative;
    z-index: 1;
  }
  
  .guru-content-header p {
    opacity: 0.9;
    margin-bottom: 0;
    position: relative;
    z-index: 1;
  }
  
  .guru-content-header::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 100px;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    transform: skewX(-15deg);
  }
  
  .data-box {
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    margin-bottom: 30px;
    border: none;
    overflow: hidden;
    background: white;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  .data-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }
  
  .data-box-header {
    position: relative;
    padding: 20px;
    border-bottom: 1px solid #f4f4f4;
  }
  
  .data-box-header h3 {
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 10px;
    color: #333;
  }
  
  .action-buttons {
    margin-top: 15px;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
  }
  
  .btn-add {
    background: linear-gradient(to right, #00a65a, #008d4c);
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(0,166,90,0.3);
  }
  
  .btn-add:hover {
    background: linear-gradient(to right, #008d4c, #00a65a);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,166,90,0.4);
  }
  
  .btn-refresh {
    background: linear-gradient(to right, #3c8dbc, #367fa9);
    color: white;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(60,141,188,0.3);
  }
  
  .btn-refresh:hover {
    background: linear-gradient(to right, #367fa9, #3c8dbc);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(60,141,188,0.4);
  }
  
  .data-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
  }
  
  .data-table th {
    background: #f9f9f9;
    color: #333;
    font-weight: 600;
    padding: 15px 10px;
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 0.5px;
    border-bottom: 2px solid #f4f4f4;
    text-align: left;
    vertical-align: middle;
  }
  
  .data-table td {
    padding: 12px 10px;
    vertical-align: middle;
    border-bottom: 1px solid #f4f4f4;
    color: #555;
    transition: background 0.2s ease;
  }
  
  .data-table tbody tr:hover td {
    background-color: #f9f9f9;
  }
  
  .btn-action {
    background: linear-gradient(to right, #f39c12, #e08e0b);
    color: white;
    border: none;
    border-radius: 4px;
    padding: 5px 10px;
    font-size: 12px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(243,156,18,0.3);
  }
  
  .btn-action:hover {
    background: linear-gradient(to right, #e08e0b, #f39c12);
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(243,156,18,0.4);
  }
  
  .dropdown-menu {
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border: none;
    border-radius: 4px;
    overflow: hidden;
  }
  
  .dropdown-menu > li > a {
    padding: 10px 20px;
    color: #555;
    transition: all 0.2s ease;
  }
  
  .dropdown-menu > li > a:hover {
    background-color: #f5f5f5;
    color: #333;
    padding-left: 25px;
  }
  
  /* Modal styling */
  .modal-content {
    border-radius: 8px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.2);
    border: none;
    overflow: hidden;
  }
  
  .modal-header {
    background: linear-gradient(120deg, #00a65a, #008d4c);
    color: white;
    border-bottom: none;
    padding: 20px;
    position: relative;
  }
  
  .modal-title {
    font-weight: 600;
    text-align: center;
    margin: 0;
  }
  
  .close {
    color: white;
    opacity: 0.8;
    text-shadow: none;
    position: absolute;
    top: 15px;
    right: 15px;
    transition: all 0.3s ease;
  }
  
  .close:hover {
    opacity: 1;
    transform: rotate(90deg);
  }
  
  .modal-body {
    padding: 25px;
  }
  
  .form-group label {
    font-weight: 600;
    color: #333;
    margin-bottom: 8px;
    display: block;
  }
  
  .form-control {
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
  
  .modal-footer {
    border-top: 1px solid #f4f4f4;
    padding: 15px 25px;
    text-align: right;
  }
  
  .btn-save {
    background: linear-gradient(to right, #00a65a, #008d4c);
    color: white;
    border: none;
    padding: 8px 25px;
    border-radius: 4px;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 3px 8px rgba(0,166,90,0.3);
  }
  
  .btn-save:hover {
    background: linear-gradient(to right, #008d4c, #00a65a);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,166,90,0.4);
  }
  
  /* Responsive tables */
  @media (max-width: 767px) {
    .table-responsive {
      border: none;
    }
    .dataTables_filter{
      text-align: left;
      float: left;
      margin-left: 14.5%;
    }
    .data-box {
      margin-bottom: 20px;
    }
    
    .action-buttons {
      flex-direction: column;
      align-items: stretch;
    }
    
    .action-buttons .btn {
      margin-bottom: 10px;
    }
    
    .form-control {
      font-size: 14px;
    }
    
    .modal-dialog {
      margin: 10px;
    }
    
    .modal-body {
      padding: 15px;
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
    Data Guru
    <small>Pengelolaan Data Pengajar</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url('home') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Data Guru</li>
  </ol>
</section>

<!-- Main content -->
<section class="content animate__animated animate__fadeIn">
  <!-- Header card -->
  <div class="guru-content-header" data-aos="fade-up">
    <div class="row">
      <div class="col-md-8">
        <h2><i class="fa fa-users"></i> Data Guru</h2>
        <p>Kelola data pengajar dengan mudah dan efisien untuk sistem ujian online</p>
      </div>
      <div class="col-md-4 text-right">
        <div class="hidden-xs">
          <i class="fa fa-graduation-cap" style="font-size: 80px; opacity: 0.3;"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <!-- Data box -->
      <div class="data-box" data-aos="fade-up" data-aos-delay="200">
        <div class="data-box-header">
          <h3><i class="fa fa-table"></i> Daftar Guru</h3>
          <div class="action-buttons">
            <button type="button" class="btn btn-add" data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-user-plus"></i> Tambah Guru Baru
            </button>
            <a href="<?= base_url('guru'); ?>" class="btn btn-refresh">
              <i class="fa fa-refresh"></i> Refresh Data
            </a>
          </div>
        </div>

        <div class="box-body">
          <table id="data" class="table table-bordered table-striped data-table">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th width="15%">NIK</th>
                <th width="35%">Nama Guru</th>
                <th width="25%">Username</th>
                <th width="20%">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 1;
              foreach ($guru as $m) { ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $m->id_guru; ?></td>
                  <td><?php echo $m->nama_guru; ?></td>
                  <td><?php echo $m->username; ?></td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-action dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cogs"></i> Aksi 
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="<?= base_url('guru/edit/') . $m->id_guru; ?>"><i class="fa fa-edit"></i> Edit Data</a></li>
                        <li><a href="<?= base_url('guru/hapus/') . $m->id_guru; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data guru ini?')"><i class="fa fa-trash"></i> Hapus Data</a></li>
                      </ul>
                    </div>
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

<!-- Modal Tambah Guru -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-user-plus"></i> Tambah Data Guru</h4>
      </div>
      <!-- /.form dengan modal -->
      <form method="post" action="<?php echo base_url() . 'guru/guru_aksi'; ?>">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama"><i class="fa fa-user"></i> Nama Guru</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Guru" required="">
          </div>
          <div class="form-group">
            <label for="nik"><i class="fa fa-id-card"></i> NIK (Nomor Induk Kepegawaian)</label>
            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK Guru" required="">
          </div>
          <div class="form-group">
            <label for="username"><i class="fa fa-user-circle"></i> Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required="">
          </div>
          <div class="form-group">
            <label for="password"><i class="fa fa-lock"></i> Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required="">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn btn-save"><i class="fa fa-save"></i> Simpan</button>
        </div>
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
    // Initialize DataTable
    $('#data').DataTable({
      responsive: true,
      "language": {
        "search": "Cari:",
        "lengthMenu": "Tampilkan _MENU_ data per halaman",
        "zeroRecords": "Tidak ada data yang ditemukan",
        "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
        "infoEmpty": "Tidak ada data yang tersedia",
        "infoFiltered": "(disaring dari _MAX_ total data)",
        "paginate": {
          "first": "Pertama",
          "last": "Terakhir",
          "next": "Selanjutnya",
          "previous": "Sebelumnya"
        }
      }
    });
    
    // Initialize AOS
    AOS.init({
      duration: 800,
      once: true
    });
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
  $('#password').on('keyup', function() {
    var password = $(this).val();
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
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>