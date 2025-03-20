</div><!-- /.content-wrapper -->

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> 2.0
	</div>
	<strong>Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a href="#">Ujian Online</a>.</strong> All rights reserved. | Made with <i class="fa fa-heart text-danger"></i> by <a href="#">Arya</a>
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/morris.js/morris.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/dataTables/datatables.min.js"></script>
<script src="<?php echo base_url() ?>assets/dataTables/DataTables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/dataTables/DataTables/js/dataTables.bootstrap.min.js"></script>

<!-- Other Plugins -->
<script src="<?php echo base_url() ?>assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>

<!-- timer -->
<script src="<?php echo base_url() ?>assets/timer/jquery.syotimer.min.js"></script>

<!-- Custom Scripts -->
<script>
// Efek Tooltip & Popover
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  
  // Efek ripple untuk tombol
  $('.btn').on('click', function(e) {
    var x = e.pageX - this.offsetLeft;
    var y = e.pageY - this.offsetTop;
    
    var ripple = document.createElement('div');
    ripple.className = 'ripple';
    ripple.style.left = x + 'px';
    ripple.style.top = y + 'px';
    
    this.appendChild(ripple);
    
    setTimeout(function() {
      ripple.parentNode.removeChild(ripple);
    }, 600);
  });
  
  // Animasi box saat scroll
  $(window).scroll(function() {
    $('.box').each(function() {
      var bottom_of_object = $(this).offset().top + $(this).outerHeight();
      var bottom_of_window = $(window).scrollTop() + $(window).height();
      
      if (bottom_of_window > bottom_of_object - 100) {
        $(this).addClass('animated fadeInUp');
      }
    });
  });
  
  // Smooth scroll untuk link
  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    
    var target = this.hash;
    var $target = $(target);
    
    $('html, body').animate({
      'scrollTop': $target.offset().top
    }, 800, 'swing');
  });
  
  // Select2
  $('.select2').select2({
    placeholder: 'Pilih opsi...'
  });
  
  // Aktifkan efek hover pada sidebar
  $('.sidebar-menu > li').hover(
    function() { $(this).addClass('menu-hover'); },
    function() { $(this).removeClass('menu-hover'); }
  );
});
</script>

<style>
/* Efek Ripple untuk tombol */
.btn {
  position: relative;
  overflow: hidden;
}
.ripple {
  position: absolute;
  background: rgba(255, 255, 255, 0.3);
  border-radius: 50%;
  transform: scale(0);
  animation: ripple 0.6s linear;
  pointer-events: none;
  width: 100px;
  height: 100px;
}
@keyframes ripple {
  to {
    transform: scale(4);
    opacity: 0;
  }
}
/* Hover efek untuk menu sidebar */
.menu-hover > a {
  background-color: rgba(255,255,255,0.1) !important;
  border-left-color: #3498db !important;
}
/* Animasi box */
.animated {
  animation-duration: 0.8s;
  animation-fill-mode: both;
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translate3d(0, 30px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}
.fadeInUp {
  animation-name: fadeInUp;
}
</style>
