<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsadmin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsadmin/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsadmin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assetsadmin/css/style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
      <div class="header-left">
        <a href="#" class="logo">
          <!-- <img src="assets/img/logo.png" width="35" height="35" alt=""> --> <span>CPANEL</span>
        </a>
      </div>
      <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            
            
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        
                        <li  class="<?php if(isset($active_dashboard)){ echo $active_dashboard;}?>">
                            <a href="<?=base_url()?>admin/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
           
                         
            <li class="submenu <?php if(isset($active_reservasi)){ echo $active_reservasi;}?>">
              <a href="#"><i class="fa fa-user"></i> <span> Reservasi </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="<?=base_url()?>admin/reservasihotel">Hotel</a></li>
                <li><a href="<?=base_url()?>admin/reservasigrooming">Grooming</a></li>
                <li><a href="<?=base_url()?>admin/reservasipet">Pet</a></li>
               
              </ul>
            </li>

             <li  class="<?php if(isset($active_dashboard)){ echo $active_dashboard;}?>">
                            <a href="<?=base_url()?>admin/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                        </li>
           
                    </ul>
                </div>
            </div>
        </div>