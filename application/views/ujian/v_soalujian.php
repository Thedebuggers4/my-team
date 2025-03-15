<?php
$this->load->view('ujian/head');
?>

<!--tambahkan custom css disini-->
<style>
    :root {
        --primary-color: #009688;
        --secondary-color: #4db6ac;
        --accent-color: #e0f2f1;
        --danger-color: #ef5350;
        --dark-color: #263238;
        --light-color: #f5f5f5;
    }
    
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }
    
    #timer_place {
        margin: 0 auto;
        text-align: center;
    }
    
    #counter {
        border-radius: 10px;
        border: none;
        padding: 15px;
        font-size: 2.2em;
        font-weight: 700;
        color: var(--dark-color);
        background-color: white;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        display: inline-block;
        min-width: 200px;
    }
    
    .countdown-danger {
        color: var(--danger-color) !important;
        animation: pulse 1s infinite;
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .card {
        border-radius: 10px;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
        margin-bottom: 20px;
        overflow: hidden;
        background-color: white;
    }
    
    .card-header {
        background-color: var(--primary-color);
        color: white;
        font-weight: 600;
        padding: 15px 20px;
        border-bottom: none;
    }
    
    .card-body {
        padding: 20px;
    }
    
    .question-card {
        margin-bottom: 25px;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        padding-top: 15px; /* Tambahkan padding atas untuk scrolling yang lebih akurat */
        padding-bottom: 15px; /* Tambahkan padding bawah */
        position: relative; /* Tambahkan position relative */
    }
    
    .question-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .highlight-question {
        animation: highlight 2s ease;
    }
    
    @keyframes highlight {
        0% { background-color: rgba(0, 150, 136, 0.1); }
        50% { background-color: rgba(0, 150, 136, 0.3); }
        100% { background-color: transparent; }
    }
    
    .question-number {
        background-color: var(--primary-color);
        color: white;
        font-weight: 600;
        padding: 8px 15px;
        border-radius: 10px 0 0 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        min-width: 40px; /* Memperbesar area nomor */
    }
    
    .question-content {
        padding: 15px 20px;
    }
    
    .custom-radio {
        display: block;
        position: relative;
        padding: 10px 15px 10px 40px;
        margin-bottom: 8px;
        cursor: pointer;
        border-radius: 8px;
        transition: all 0.2s ease;
        background-color: var(--light-color);
    }
    
    .custom-radio:hover {
        background-color: var(--accent-color);
    }
    
    .custom-radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    
    .checkmark {
        position: absolute;
        top: 12px;
        left: 15px;
        height: 20px;
        width: 20px;
        background-color: white;
        border: 2px solid #ddd;
        border-radius: 50%;
    }
    
    .custom-radio:hover input ~ .checkmark {
        border-color: var(--primary-color);
    }
    
    .custom-radio input:checked ~ .checkmark {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }
    
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    
    .custom-radio input:checked ~ .checkmark:after {
        display: block;
    }
    
    .custom-radio .checkmark:after {
        top: 4px;
        left: 4px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }
    
    .btn-submit {
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 30px;
        font-weight: 600;
        letter-spacing: 0.5px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .btn-submit:hover {
        background-color: var(--secondary-color);
        transform: translateY(-2px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }
    
    .progress-wrap {
        margin-top: 15px;
        background-color: white;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .progress {
        height: 8px;
        border-radius: 4px;
        background-color: #e0e0e0;
        margin-top: 10px;
    }
    
    .progress-bar {
        background-color: var(--primary-color);
        border-radius: 4px;
    }
    
    .d-flex {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    .nav-pills {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 15px;
    }
    
    .nav-pill-item {
        width: 40px; /* Sedikit lebih besar */
        height: 40px; /* Sedikit lebih besar */
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: white;
        border: 2px solid #ddd; /* Border lebih tebal */
        border-radius: 8px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
        margin: 3px; /* Tambahkan margin */
        font-size: 16px; /* Ukuran font lebih besar */
    }
    
    .nav-pill-item:hover {
        background-color: var(--accent-color);
        border-color: var(--primary-color);
    }
    
    .nav-pill-item.answered {
        background-color: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }
    
    .nav-pill-item.active {
        transform: scale(1.1);
        box-shadow: 0 0 0 2px var(--primary-color);
        z-index: 1;
        position: relative;
        background-color: white;
        color: var(--primary-color);
        font-weight: bold;
    }
    
    .nav-pill-item.active.answered {
        background-color: var(--primary-color);
        color: white;
    }
    
    .ujian-wrapper {
        min-height: 500px;
        position: relative;
        padding: 20px 0;
    }
    
    .question-slide {
        display: none;
        animation: fadeIn 0.5s ease;
    }
    
    .question-slide.active {
        display: block;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }
    
    .slide-controls {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
        align-items: center;
        padding: 10px 0;
    }
    
    .slide-btn {
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .slide-btn:hover {
        background-color: var(--secondary-color);
    }
    
    .slide-btn:disabled {
        background-color: #cccccc;
        cursor: not-allowed;
    }
    
    .slide-indicator {
        font-weight: 600;
        color: var(--dark-color);
    }
    
    /* Container navigasi soal fixed saat scrolling */
    .navigation-container {
        position: sticky;
        top: 20px;
    }
    
    .mt-4 {
        margin-top: 20px;
    }
    
    .mb-3 {
        margin-bottom: 15px;
    }
    
    .text-right {
        text-align: right;
    }
    
    .submit-container {
        margin-top: 40px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }
</style>

<?php
$this->load->view('ujian/topbar');
?>

<?php

if(isset($_SESSION["waktu_start"])){
    $lewat = time() - $_SESSION["waktu_start"];
}else{
    $_SESSION["waktu_start"] = time();
    $lewat = 0;
}

?>
<!-- Content Header (Page header) -->


<!-- Main content -->
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card navigation-container">
            <div class="card-header text-center">
              <h4>Waktu Ujian</h4>
            </div>
            <div class="card-body" id="timer_place">
                <div id="counter" align="center"></div>
                
                <div class="progress-wrap">
                    <div class="d-flex justify-content-between">
                        <span>Progres Ujian</span>
                        <span id="progress-text">0%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%" id="progress-bar"></div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <h5>Navigasi Soal</h5>
                    <div class="nav-info d-flex" style="margin-bottom: 10px; font-size: 12px;">
                        <div style="display: flex; align-items: center; margin-right: 15px;">
                            <span style="display: inline-block; width: 12px; height: 12px; background-color: var(--primary-color); border-radius: 3px; margin-right: 5px;"></span>
                            <span>Terjawab</span>
                        </div>
                        <div style="display: flex; align-items: center; margin-right: 15px;">
                            <span style="display: inline-block; width: 12px; height: 12px; border: 1px solid #ddd; border-radius: 3px; margin-right: 5px;"></span>
                            <span>Belum Terjawab</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <span style="display: inline-block; width: 12px; height: 12px; border: 2px solid var(--primary-color); border-radius: 3px; margin-right: 5px;"></span>
                            <span>Aktif</span>
                        </div>
                    </div>
                    <div class="nav-pills" id="soal-nav">
                        <?php for($i=1; $i <= $total_soal; $i++) { ?>
                            <div class="nav-pill-item" data-soal="<?= $i ?>"><?= $i ?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="col-md-9">
        <div class="card">
            <div class="card-header text-center">
               <h3>Soal Ujian</h3>
            </div>
            <div class="card-body">
                <div class="ujian-wrapper" id="ujian-wrapper">
                    <form id="formSoal" role="form" action="<?php echo base_url(); ?>ruang_ujian/jawab_aksi" method="post" onsubmit="return confirmSubmit()">
                        <input type="hidden" name="id_peserta" value="<?php echo $id['id_peserta']; ?>">
                        <input type="hidden" name="jumlah_soal" value="<?php echo $total_soal; ?>">

                        <?php $no = 0;
                        foreach ($soal as $s) {
                            $no++ ?>
                            <div class="question-slide" id="question-<?= $no ?>">
                                <div class="question-card">
                                    <div class="row">
                                        <div class="col-md-1 col-xs-2" style="min-width: 50px;">
                                            <div class="question-number"><?php echo $no; ?></div>
                                        </div>
                                        <div class="col-md-11 col-xs-10" style="padding-left: 0;">
                                            <div class="question-content">
                                                <p class="question-text"><?php echo $s->pertanyaan; ?></p>
                                                <input type='hidden' name='soal[]' value='<?php echo $s->id_soal_ujian; ?>' />
                                                
                                                <label class="custom-radio">
                                                    <?php echo $s->a; ?>
                                                    <input type="radio" name="jawaban[<?php echo $s->id_soal_ujian; ?>]" value="A" required data-soal="<?= $no ?>" class="jawaban-radio" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                                <label class="custom-radio">
                                                    <?php echo $s->b; ?>
                                                    <input type="radio" name="jawaban[<?php echo $s->id_soal_ujian; ?>]" value="B" required data-soal="<?= $no ?>" class="jawaban-radio" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                                <label class="custom-radio">
                                                    <?php echo $s->c; ?>
                                                    <input type="radio" name="jawaban[<?php echo $s->id_soal_ujian; ?>]" value="C" required data-soal="<?= $no ?>" class="jawaban-radio" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                                <label class="custom-radio">
                                                    <?php echo $s->d; ?>
                                                    <input type="radio" name="jawaban[<?php echo $s->id_soal_ujian; ?>]" value="D" required data-soal="<?= $no ?>" class="jawaban-radio" />
                                                    <span class="checkmark"></span>
                                                </label>
                                                
                                                <label class="custom-radio">
                                                    <?php echo $s->e; ?>
                                                    <input type="radio" name="jawaban[<?php echo $s->id_soal_ujian; ?>]" value="E" required data-soal="<?= $no ?>" class="jawaban-radio" />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="slide-controls">
                                    <button type="button" class="slide-btn prev-slide" <?= $no == 1 ? 'disabled' : '' ?> data-target="<?= $no-1 ?>">
                                        <i class="fa fa-arrow-left"></i> Soal Sebelumnya
                                    </button>
                                    <span class="slide-indicator">Soal <?= $no ?> dari <?= $total_soal ?></span>
                                    <button type="button" class="slide-btn next-slide" <?= $no == $total_soal ? 'disabled' : '' ?> data-target="<?= $no+1 ?>">
                                        Soal Berikutnya <i class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        <?php } ?>
                        
                        <div class="submit-container">
                            <div class="text-right">
                                <button type="submit" class="btn btn-submit"><i class="fa fa-check-circle mr-2"></i> Selesai & Kirim Jawaban</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->

<?php
$this->load->view('ujian/js');
?>

<!--tambahkan custom js disini-->
<script type="text/javascript">
    // Fungsi untuk konfirmasi submit
    function confirmSubmit() {
        return confirm('Anda yakin ingin menyelesaikan ujian? Jawaban yang sudah dikirim tidak dapat diubah lagi.');
    }
    
    // Fungsi ketika waktu habis
    function waktuHabis(){
        alert('Waktu Anda telah habis, Jawaban anda akan disimpan secara otomatis.');
        document.getElementById("formSoal").submit(); 
    }
    
    // Fungsi ketika waktu hampir habis
    function hampirHabis(periods){
        if($.countdown.periodsToSeconds(periods) <= 60){
            $(this).addClass('countdown-danger');
        }
    }
    
    // Update progress bar saat jawaban dipilih dan navigasi soal
    $(document).ready(function() {
        // Variabel untuk melacak soal yang sedang aktif
        var activeQuestion = 1;
        
        // Tampilkan soal pertama saat halaman dimuat
        showSlide(1);
        
        // Fungsi untuk menampilkan slide tertentu
        function showSlide(slideNumber) {
            // Sembunyikan semua slide
            $('.question-slide').removeClass('active');
            
            // Tampilkan slide yang dipilih
            $('#question-' + slideNumber).addClass('active');
            
            // Update navigasi
            updateActiveQuestion(slideNumber);
        }
        
        // Fungsi untuk menandai soal yang aktif pada navigasi
        function updateActiveQuestion(soalId) {
            // Hapus semua class active
            $('.nav-pill-item').removeClass('active');
            // Tambahkan class active pada soal yang sedang dilihat
            $('.nav-pill-item[data-soal="' + soalId + '"]').addClass('active');
            activeQuestion = soalId;
        }
        
        // Event handler untuk navigasi soal
        $('.nav-pill-item').on('click', function() {
            var soalId = $(this).data('soal');
            showSlide(soalId);
        });
        
        // Event handler untuk tombol next dan prev
        $('.next-slide, .prev-slide').on('click', function() {
            var targetSlide = $(this).data('target');
            showSlide(targetSlide);
        });
        
        // Update navigasi dan progress saat jawaban dipilih
        $('.jawaban-radio').on('change', function() {
            var soalId = $(this).data('soal');
            $('.nav-pill-item[data-soal="' + soalId + '"]').addClass('answered');
            
            // Hitung progres
            var totalJawab = $('.nav-pill-item.answered').length;
            var totalSoal = $('.nav-pill-item').length;
            var progres = Math.round((totalJawab / totalSoal) * 100);
            
            // Update progress bar
            $('#progress-bar').css('width', progres + '%');
            $('#progress-text').text(progres + '%');
        });
        
        // Periksa jawaban yang sudah diisi saat halaman dimuat
        setTimeout(function() {
            $('input.jawaban-radio:checked').each(function() {
                var soalId = $(this).data('soal');
                $('.nav-pill-item[data-soal="' + soalId + '"]').addClass('answered');
            });
            
            // Update progress bar saat pertama kali load
            var totalJawab = $('.nav-pill-item.answered').length;
            var totalSoal = $('.nav-pill-item').length;
            var progres = Math.round((totalJawab / totalSoal) * 100);
            
            $('#progress-bar').css('width', progres + '%');
            $('#progress-text').text(progres + '%');
        }, 500);
    });
    
    // Timer countdown
    $(function(){
        var waktu = '<?= $max_time; ?>'; 
        var sisa_waktu = waktu - <?php echo $lewat ?>;
        var longWayOff = sisa_waktu;
        $("#counter").countdown({
            until: longWayOff,
            compact:true,
            onExpiry:waktuHabis,
            onTick: hampirHabis,
            format: 'HMS'
        });
    });

    // Disable back button
    window.location.hash="no-back-button";
    window.location.hash="Again-No-back-button";
    window.onhashchange=function(){window.location.hash="no-back-button";}
</script>


<?php
$this->load->view('ujian/foot');
?>