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
  
  .table-container {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    margin-top: 20px;
    margin-bottom: 20px;
  }
  
  .data-table thead th {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    color: white;
    border: none;
    padding: 12px 15px;
  }
  
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 77, 0, 0.03);
  }
  
  .check-container {
    background-color: #E8F5E9;
    padding: 8px 12px;
    border-radius: 4px;
    display: inline-block;
    margin-bottom: 10px;
  }
  
  .check-container input[type="checkbox"] {
    margin-right: 5px;
    position: relative;
    top: 2px;
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
    
    .table-responsive {
      border: none;
    }
    
    .dataTables_filter {
      text-align: left;
      float: left;
      margin-left: 3.5%;
    }

    #data_paginate.dataTables_paginate{
      text-align: center;
      float: left;
      margin-left: 30px;
      margin-right: 30px;
    }
    
    .dataTables_info{
      text-align: center;
      float: left;
      margin-left: 70px;
      margin-right: 70px;
    }
    
    .table-container .table td {
      word-break: break-word;
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
                <h2><i class="fa fa-user-plus"></i> Tambah Peserta Ujian</h2>
                <p>Tambahkan peserta baru untuk mengikuti ujian online</p>
            </div>
            
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-container" data-aos="fade-up">
                        <div class="form-header">
                            <h4 style="margin: 0; color: #2E7D32;"><i class="fa fa-edit"></i> Form Tambah Peserta Ujian</h4>
                        </div>
                        
                        <!-- Form untuk tambah peserta ujian -->
                        <form action="<?=base_url('peserta_tambah/insert_');?>" method="post">
                            <div class="form-body">
                                <div class="section-title">
                                    <i class="fa fa-info-circle"></i> Informasi Ujian
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-building"></i> Pilih Kelas</label>
                                            <select class="select2 form-control" name="kelas" required>
                                                <option selected disabled value="">- Pilih Kelas -</option>
                                                <?php foreach($kelas as $a) { ?>
                                                    <option value="<?=$a->id_kelas?>"><?= $a->nama_kelas;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-book"></i> Mata Pelajaran</label>
                                            <select class="select2 form-control" name="mapel" required>
                                                <option selected disabled value="">- Pilih Mata Pelajaran -</option>
                                                <?php foreach($mapel as $a) { ?>
                                                    <option value="<?=$a->id_matapelajaran?>"><?= $a->kode_matapelajaran;?> | <?= $a->nama_matapelajaran;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-calendar"></i> Tanggal Ujian</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" class="form-control" id="date" name="tanggal" placeholder="2023-03-30" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-clock-o"></i> Jam Ujian</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control" id="time" name="jam" placeholder="13:00" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-list-alt"></i> Jenis Ujian</label>
                                            <select class="select2 form-control" name="jenis_ujian" required>
                                                <option selected disabled value="">- Pilih Jenis Ujian -</option>
                                                <?php foreach ($jenis_ujian as $a) { ?>
                                                    <option value="<?= $a->id_jenis_ujian ?>"><?= $a->jenis_ujian; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><i class="fa fa-hourglass-half"></i> Durasi Ujian (Menit)</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                                                <input type="text" class="form-control" name="durasi_ujian" placeholder="Masukkan lama waktu ujian dalam menit" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="section-title">
                                    <i class="fa fa-users"></i> Pilih Peserta Ujian
                                </div>
                                
                                <div class="table-responsive table-container">
                                    <div class="check-container">
                                        <input type="checkbox" id="cek-semua" class="check-all">
                                        <label for="cek-semua" style="display: inline; font-weight: bold;">Pilih Semua Siswa</label>
                                    </div>
                                    <table id="data" class="table table-bordered table-striped data-table">
                                        <thead>
                                            <tr>
                                                <th width="5%">No</th>
                                                <th>Nama Siswa</th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th width="10%" class="text-center">Pilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no=1;
                                            foreach($siswa as $d) { ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $no++; ?></td>
                                                    <td><strong><?php echo $d->nama_siswa; ?></strong></td>
                                                    <td><?php echo $d->nis; ?></td>
                                                    <td><?php echo $d->nama_kelas; ?></td>
                                                    <td class="text-center">
                                                        <input type="checkbox" name="id[]" value="<?php echo $d->id_siswa; ?>" class="siswa-checkbox"/>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="button-group">
                                    <a href="<?=base_url('peserta')?>" class="btn btn-default">
                                        <i class="fa fa-arrow-left"></i> Kembali
                                    </a>
                                    <button type="submit" class="btn btn-gradient-success">
                                        <i class="fa fa-save"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!-- /.form tambah peserta ujian -->
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
        
        // Inisialisasi DataTable
        $('#data').DataTable({
            responsive: true,
            "autoWidth": false,
            "language": {
                "lengthMenu": "Tampilkan _MENU_ data per halaman",
                "zeroRecords": "Data tidak ditemukan",
                "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                "infoEmpty": "Tidak ada data yang tersedia",
                "infoFiltered": "(difilter dari _MAX_ total data)",
                "search": "Cari:",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
            }
        });
        
        // Cek semua checkbox
        $('#cek-semua').on('click', function() {
            $('.siswa-checkbox').prop('checked', this.checked);
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
        $('#date').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });
        
        // Inisialisasi timepicker
        $('#time').timepicker({
            showInputs: false,
            showMeridian: false
        });
    });

    $('.alert-dismissible').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>

