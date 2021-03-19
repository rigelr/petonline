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

  <!-- Template Main CSS File -->
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i> +1 5589 55488 55
        <span class="d-none d-lg-inline-block"><i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM</span>
      </div>
      
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?=base_url()?>"><?=$title?></a></h1>
     
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="<?=base_url()?>">Home</a></li>
          <li><a href="<?=base_url()?>home/service">Service</a></li>
          <li><a href="<?=base_url()?>home/contact">Contact Us</a></li>
          <li class="book-a-table text-center"><a href="<?=base_url()?>home/login">Login Here</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span><?=$title?></span></h1>
          <h2>Servie to you everyday...</h2>

          <div class="btns">
            <a href="<?=base_url()?>home/service" class="btn-menu animated fadeInUp scrollto">Our Service</a>
            
          </div>
        </div>
        

      </div>
    </div>
  </section><!-- End Hero -->