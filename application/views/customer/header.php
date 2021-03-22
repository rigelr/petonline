<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$title?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/owl.carousel/<?=base_url();?>assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/aos/aos.css" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css" integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ==" crossorigin="anonymous" />
  <!-- Template Main CSS File -->
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/css/mystyle.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top" style="background: #000;">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="background: #1f1e1e;">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=base_url()?>"><?=$title?></a></h1>
     
      <nav class="nav-menu d-none d-lg-block">
        <ul>
           <li class="<?php if(isset($active_home)){ echo $active_home;}?>"><a href="<?=base_url()?>customer/dashboard">Home</a></li>
           <li class="<?php if(isset($active_drop)){ echo $active_drop;}?> nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Service
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a style="color:#222;" class="dropdown-item" href="<?=base_url()?>customer/reservasihotel">Reservasi Hotel </a>
                <a style="color:#222;"  class="dropdown-item" href="<?=base_url()?>customer/reservasigrooming">Reservasi Grooming</a>
                <a style="color:#222;" class="dropdown-item" href="<?=base_url()?>customer/reservasipet">Reservasi Pet</a>
                
              </div>
            </li>
            

          <!-- <li class="<?php if(isset($active_hotel)){ echo $active_hotel;}?>"><a href="<?=base_url()?>customer/reservasihotel">Hotel</a></li>
          <li class="<?php if(isset($active_grooming)){ echo $active_grooming;}?>"><a href="<?=base_url()?>customer/reservasigrooming">Grooming</a></li>
          <li class="<?php if(isset($active_pet)){ echo $active_pet;}?>"><a href="<?=base_url()?>customer/reservasipet">Pet</a></li> -->
          <li class="<?php if(isset($active_profil)){ echo $active_profil;}?>"><a href="<?=base_url()?>customer/profil">Profil</a></li>
          <li class="<?php if(isset($active_home)){ echo $active_home;}?>"><a href="<?=base_url()?>customer/dashboardhistory">History</a></li>
          <li class="book-a-table text-center"><a href="<?=base_url()?>customer/logout">Logout Here</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->