<form action="<?=base_url('siswa/create');?>" method="post">
  <div class="box-body">
    <div class="form-group">
      <label><i class="fa fa-user"></i> Nama Siswa</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap siswa" required>
    </div>
    <div class="form-group">
      <label><i class="fa fa-id-card"></i> NIS</label>
      <input type="text" class="form-control" name="nis" placeholder="Masukkan Nomor Induk Siswa" required>
    </div>
    <div class="form-group">
      <label><i class="fa fa-th-list"></i> Kelas</label>
      <select class="select2 form-control" name="kelas" required="">
        <option value="">-- Pilih Kelas --</option>
        <?php foreach($kelas as $k) { ?>
          <option value="<?=$k->id_kelas?>" ><?= $k->nama_kelas;?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label><i class="fa fa-user-circle"></i> Username</label>
      <input type="text" class="form-control" name="username" placeholder="Masukkan username untuk login" required>
    </div>
    <div class="form-group">
      <label><i class="fa fa-lock"></i> Password</label>
      <div class="input-group">
        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" required>
        <span class="input-group-addon" onclick="togglePassword()">
          <i class="fa fa-eye-slash" id="eye-icon"></i>
        </span>
      </div>
      <div class="password-strength-meter" style="height: 5px; width: 100%; background-color: #e0e0e0; border-radius: 3px; margin-top: 10px; overflow: hidden;">
        <div class="password-strength-meter-fill" id="strength-meter-fill" style="height: 100%; width: 0; transition: width 0.3s ease, background-color 0.3s ease;"></div>
      </div>
      <div class="password-strength-text" id="password-strength" style="font-size: 12px; font-weight: 600; margin-top: 5px;"></div>
    </div>
  </div>
  <!-- /.box-body -->
  <div class="box-footer">
    <div class="pull-right">
      <button type="button" class="btn btn-default" data-dismiss="modal" style="margin-right: 10px;"><i class="fa fa-times"></i> Batal</button>
      <button type="submit" class="btn btn-gradient-primary" style="background: linear-gradient(to right, #3c8dbc, #2980b9); border: none;"><i class="fa fa-save"></i> Simpan</button>
    </div>
  </div> 
  <!-- /.box-footer -->
</form>

<script>
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
  document.getElementById('password').addEventListener('input', function() {
    var password = this.value;
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
  });
  
  // Inisialisasi Select2
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Pilih kelas",
      width: '100%'
    });
  });
</script>
