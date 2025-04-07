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
        <h2><i class="fa fa-edit"></i> Edit Jenis Ujian</h2>
        <p>Perbarui informasi jenis ujian pada sistem</p>
      </div>
      
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="form-container" data-aos="fade-up">
            <div class="form-header">
              <h4 style="margin: 0; color: #2E7D32;"><i class="fa fa-list-alt"></i> Form Edit Jenis Ujian</h4>
            </div>
            
            <?php foreach($jenis_ujian as $a) { ?>
              <!-- form start -->
              <form action="<?=base_url('jenis_ujian/update');?>" method="post">
                <div class="form-body">
                  <input type="hidden" name="id" value="<?= $a->id_jenis_ujian;?>">
                  
                  <div class="form-group">
                    <label><i class="fa fa-list-alt"></i> Jenis Ujian</label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                      <input type="text" class="form-control" name="nama" value="<?= $a->jenis_ujian;?>" required placeholder="Masukkan jenis ujian">
                    </div>
                  </div>
                  
                  <hr style="border-top: 1px solid #eee;">
                  
                  <div class="button-group">
                    <a href="<?=base_url('jenis_ujian')?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="100">
                      <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-gradient-success" data-aos="zoom-in" data-aos-delay="200" title="Simpan Data">
                      <i class="fa fa-save"></i> Simpan
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
  });

  $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>