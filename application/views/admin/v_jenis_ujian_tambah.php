<style>
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
  
  .input-group-addon {
    background-color: #E8F5E9;
    border-color: #ddd;
    color: #2E7D32;
  }
  
  .text-danger {
    color: #f44336;
    font-size: 12px;
    margin-top: 5px;
  }
  
  @media (max-width: 768px) {
    .form-group label {
      font-size: 14px;
    }
  }
</style>

<form action="<?=base_url('jenis_ujian/create');?>" method="post" class="form">
  <div class="form-body">
    <div class="form-group">
      <label for="nama"><i class="fa fa-list-alt"></i> Jenis Ujian</label>
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan jenis ujian" required autocomplete="off">
      </div>
      <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  
  <div class="form-footer text-right">
    <button type="submit" class="btn btn-gradient-success" title="Simpan Data">
      <i class="fa fa-save"></i> Simpan
    </button>
  </div>
</form>
