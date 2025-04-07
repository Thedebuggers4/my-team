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
  
  .animated-box {
    transition: all 0.3s ease;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border-top: 3px solid #2E7D32;
    background-color: white;
    margin-bottom: 20px;
  }
  
  .animated-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
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
  
  .table-container {
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    margin-top: 20px;
  }
  
  .data-table thead th {
    background: linear-gradient(to right, #4CAF50, #2E7D32);
    color: white;
    border: none;
    padding: 12px 15px;
    font-weight: 600;
  }
  
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(0, 77, 0, 0.03);
  }
  
  .status-badge {
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
    display: inline-block;
    min-width: 80px;
    text-align: center;
  }
  
  .status-pending {
    background: #f0f0f0;
    color: #666;
  }
  
  .status-completed {
    background: #E8F5E9;
    color: #2E7D32;
  }
  
  .nilai-badge {
    padding: 5px 15px;
    border-radius: 4px;
    font-weight: 600;
  }
  
  .nilai-tinggi {
    background: #E8F5E9;
    color: #2E7D32;
  }
  
  .nilai-sedang {
    background: #FFF3E0;
    color: #EF6C00;
  }
  
  .nilai-rendah {
    background: #FFEBEE;
    color: #C62828;
  }
  
  /* Button container */
  .button-container {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
    flex-wrap: wrap;
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
    
    .button-container {
      justify-content: center;
    }
    
    .table-responsive {
      border: none;
    }
    
    table.dataTable {
      width: 100% !important;
    }
    
    .dataTables_filter {
      text-align: left;
      float: left;
      margin-left: 5%;
    }
    
    .table-container .table td {
      word-break: break-word;
    }
    
    .animated-box {
      margin: 0 10px 15px 10px;
    }
    
    .status-badge {
      min-width: 60px;
      font-size: 11px;
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
        <h2><i class="fa fa-file-text"></i> Hasil Ujian</h2>
        <p>Lihat dan kelola hasil ujian siswa</p>
      </div>
      
      <!-- Main content box -->
      <div class="animated-box" data-aos="fade-up">
        <div class="box-header" style="padding: 15px 20px;">
          <div class="row">
            <div class="col-md-12">
              <div class="button-container">
                <a href="<?= base_url('hasil_ujian'); ?>" class="btn btn-default" data-aos="zoom-in" data-aos-delay="100">
                  <i class="fa fa-refresh"></i> Refresh Data
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Table content -->
        <div class="box-body table-responsive table-container">
          <table id="data" class="table table-bordered table-striped data-table responsive nowrap" width="100%">
            <thead>
              <tr>
                <th width="5%">No</th>
                <th>Nama Siswa</th>
                <th>NIS</th>
                <th>Mata Pelajaran</th>
                <th>Tanggal Ujian</th>
                <th>Jam Ujian</th>
                <th>Jenis Ujian</th>
                <th class="text-center">Benar</th>
                <th class="text-center">Salah</th>
                <th class="text-center">Nilai</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no=1;
              foreach($hasil as $d) { ?>
                <tr data-aos="fade-up" data-aos-delay="<?= $no * 50; ?>">
                  <td class="text-center"><?php echo $no++; ?></td>
                  <td><strong><?php echo $d->nama_siswa; ?></strong></td>
                  <td><?php echo $d->nis; ?></td>
                  <td><?php echo $d->nama_matapelajaran; ?></td>
                  <td><?php echo date('d-m-Y',strtotime($d->tanggal_ujian)); ?></td>
                  <td><?php echo date('H:i:s',strtotime($d->jam_ujian)); ?></td>
                  <td><span class="status-badge status-completed"><?php echo $d->jenis_ujian; ?></span></td>
                  <td class="text-center">
                    <?php
                    if($d->benar == ''){
                      echo "<span class='status-badge status-pending'>Belum Ujian</span>";
                    }else {
                      echo "<span class='nilai-badge nilai-tinggi'>".$d->benar."</span>";
                    }
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                    if($d->salah == ''){
                      echo "<span class='status-badge status-pending'>Belum Ujian</span>";
                    }else {
                      echo "<span class='nilai-badge nilai-rendah'>".$d->salah."</span>";
                    }
                    ?>
                  </td>
                  <td class="text-center">
                    <?php
                    if($d->nilai == ''){
                      echo "<span class='status-badge status-pending'>Belum Ujian</span>";
                    }else {
                      $nilai_class = '';
                      if($d->nilai >= 80) {
                        $nilai_class = 'nilai-tinggi';
                      } else if($d->nilai >= 60) {
                        $nilai_class = 'nilai-sedang';
                      } else {
                        $nilai_class = 'nilai-rendah';
                      }
                      echo "<span class='nilai-badge ".$nilai_class."'>".$d->nilai."</span>";
                    }
                    ?>
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
  });

  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

<?php
$this->load->view('admin/foot');
?>
