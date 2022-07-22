<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $judul;?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="<?= base_url('assets/');?>Free-Template.co" />

    <link rel="shortcut icon" href="<?= base_url('assets/');?>ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/');?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/');?>css/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/aos.css">

    <link rel="stylesheet" href="<?= base_url('assets/');?>css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="<?= base_url();?>#home-section" class="mb-0">RumbaiKos</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= base_url();?>#home-section" class="nav-link">Home</a></li>
                <li><a href="<?= base_url();?>#recommend" class="nav-link">Rekomendasi Kos</a></li>
                <li><a href="#" class="nav-link">Panduan Pengguna</a></li>
                <li><a href="#" class="nav-link">Pemilik Kos?</a></li>
                <?php 
                  if ($this->session->userdata('email')){;
                ?>
                <li><a href="<?= base_url();?>beranda" class="nav-link">Beranda</a></li>
                <li><a href="<?= base_url();?>auth/logout" class="nav-link">Logout</a></li>
                <?php }else{?>
                  <li><a href="<?= base_url();?>auth/login" class="nav-link">Login</a></li>
                  <?php }?>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
