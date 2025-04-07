<?php
$this->load->view('admin/head');
?>
<!--tambahkan custom css disini-->
<style>
  .content-header-custom {
    background: linear-gradient(135deg, #4CAF50, #2E7D32);
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
    border-color: #4CAF50;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
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
  }
  
  .box-shadow {
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
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
        <h2><i class="fa fa-th-list"></i> Edit Data Kelas</h2>
        <p>Perbarui informasi kelas untuk sistem ujian online</p>
      </div>
      
      <div class="col-md-8 col-md-offset-2">
        <div class="form-container" data-aos="fade-up">
          <div class="form-header">
            <h4 class="text-center" style="margin: 0; color: #4CAF50;"><i class="fa fa-edit"></i> Form Edit Kelas</h4>
          </div>
          
          <?php foreach ($kelas as $a) { ?>
            <!-- form start -->
            <form action="<?= base_url('kelas/update'); ?>" method="post">
              <div class="form-body" data-aos="fade-up" data-aos-delay="100">
                <input type="hidden" name="id" value="<?= $a->id_kelas; ?>">
                
                <div class="form-group">
                  <label><i class="fa fa-th-list"></i> Nama Kelas</label>
                  <div class="icon-input">
                    <i class="fa fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="nama" value="<?= $a->nama_kelas; ?>" placeholder="Masukkan nama kelas" required>
                  </div>
                </div>
                
                <hr style="border-top: 1px solid #eee;">
                
                <div class="form-group text-right">
                  <a href="<?=base_url('kelas')?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="300">
                    <i class="fa fa-arrow-left"></i> Batal
                  </a>
                  <button type="submit" class="btn btn-gradient-success" data-aos="zoom-in" data-aos-delay="300">
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
    
    // Form validation
    $('form').on('submit', function(e) {
      var nameField = $('input[name="nama"]');
      
      if (nameField.val().trim() === '') {
        e.preventDefault();
        nameField.addClass('is-invalid').focus();
        return false;
      }
      
      return true;
    });
    
    $('input').on('keyup', function() {
      $(this).removeClass('is-invalid');
    });
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>