<?php  
if (!isset($_SESSION['id_admin'])) {
  header('location:index.php?route=home/login');
  exit();
}
?> 
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- <title><?php //echo $title;?></title> -->
  <meta name="robots" content="noindex, nofollow">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
  <link href="assets/css/sidebar.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  
  <?php if(isset($style)){ 
      foreach ($style as $key => $value) { ?>
    <link rel="stylesheet" href="<?php echo $value;?>">
  <?php } } ?>
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/jquery-migrate-3.3.2.min.js"></script>
  <script src="assets/boostrap_jquery/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

  <?php 
  if(isset($script)){
  foreach ($script as $key => $value) { ?>
    <script src="<?php echo $value;?>"></script>
  <?php } } ?>
</head>
<body class="<?php echo (isset($class_body)?$class_body:'animsition site-navbar-small dashboard mm-wrapper site-menubar-fold site-navbar dashboard'); ?>">
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="menu-left" id="sidebar-wrapper">
      <div class="sidebar-heading text-theme text-center">
        <!-- <img src="../uploads/logo/slogo.png" alt="" width="100"> -->
        <h1>Admin</h1>
      </div>
      <div class="list-group menu-list list-group-flush">
        <a href="<?php echo route('home'); ?>" class="list-group-item list-group-item-action" id="page-dashboard">หน้าหลัก</a>
        <?php if(in_array(1,$menu)){ ?>
        <a href="<?php echo route('question'); ?>" class="list-group-item list-group-item-action" id="page-question">แบบสอบถาม</a>
        <?php } ?>
        <?php if(in_array(2,$menu)){ ?>
        <a href="<?php echo route('reportQuestion'); ?>" class="list-group-item list-group-item-action" id="page-reportquestion">รายงานผลแบบสอบถาม</a>
        <?php } ?>
        <!-- <a href="<?php echo route('article'); ?>" class="list-group-item list-group-item-action" id="page-article">บทความ</a> -->
        <?php if(in_array(3,$menu)){ ?>
        <a href="<?php echo route('news'); ?>" class="list-group-item list-group-item-action" id="page-news">ข่าวสาร</a>
        <?php } ?>
        <!-- <a href="<?php echo route('report'); ?>" class="list-group-item list-group-item-action" id="page-report">รายงาน</a> -->
        <?php if(in_array(4,$menu)){ ?>
        <a href="<?php echo route('member'); ?>" class="list-group-item list-group-item-action" id="page-member">สมาชิก</a>
        <?php } ?>
        <?php if(in_array(5,$menu)){ ?>
        <a href="<?php echo route('group'); ?>" class="list-group-item list-group-item-action" id="page-group">กลุ่มสมาชิก</a>
        <?php } ?>
        <a href="<?php echo route('home/logout'); ?>" class="list-group-item list-group-item-action">ออกจากระบบ</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-white px-3">
        <a id="menu-toggle" href="#" style="color: #999;"><i class="fas fa-bars fa-2x"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">หน้าหลัก </a>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo route('home/logout'); ?>">Logout</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>