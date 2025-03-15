<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ujian Online</title>
  <link rel="shortcut icon" href="image/kemendikbud.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dataTables/DataTables/css/dataTables.bootstrap.min.css">
  <!-- select2 -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/bower_components/select2/dist/css/select2.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/iCheck/all.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- AOS (Animate On Scroll) -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/css.css">
  
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .main-header .logo {
      transition: width .3s ease-in-out;
      background-color: #2c3e50;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      font-weight: 600;
    }
    .main-header .navbar {
      background-color: #34495e;
    }
    .content-wrapper {
      background-color: #f8f9fa;
    }
    .skin-blue .sidebar-menu>li.active>a {
      border-left-color: #3498db;
    }
    .user-panel {
      background-color: rgba(0,0,0,0.1);
      padding: 15px;
    }
    .user-panel>.info {
      padding: 8px 5px 5px 15px;
    }
    .skin-blue .main-sidebar {
      background-color: #2c3e50;
    }
    .sidebar-menu li>a {
      font-weight: 500;
    }
    .box {
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      border-top: 3px solid #3498db;
    }
    .box-header {
      padding: 20px;
    }
    .box-body {
      padding: 20px;
    }
    .callout {
      border-radius: 10px;
    }
    .btn {
      border-radius: 5px;
      font-weight: 500;
      padding: 8px 16px;
      transition: all 0.3s;
    }
    .btn-primary {
      background-color: #3498db;
      border-color: #3498db;
    }
    .btn-primary:hover {
      background-color: #2980b9;
      border-color: #2980b9;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
    }
    .navbar-custom-menu .navbar-nav>li>a {
      padding-top: 15px;
      padding-bottom: 15px;
    }
  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>