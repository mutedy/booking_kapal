<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title; ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/home/vendor') ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/home/css') ?>/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('/') ?>"><img id="image" style="height:40px" alt="logo" src="https://1.bp.blogspot.com/-bHiuTg4r4yc/XS9gT1joI9I/AAAAAAAAMuY/ADS0iwWKkmAXYje7EGEABrjJksP-m5spwCEwYBhgL/s1600/logo.png">Booking Kapal</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= $active == 0 ? "active" : "" ?>">
            <a class="nav-link" href="<?= base_url('/') ?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php 
            if($this->session->userdata('login')) {
          ?>
            <li class="nav-item <?= $active == 1 ? "active" : "" ?>">
              <a class="nav-link" href="<?= base_url('/profile') ?>">Profile</a>
            </li>
            <li class="nav-item <?= $active == 2 ? "active" : "" ?>">
              <a class="nav-link" href="<?= base_url('/orders') ?>">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/logout') ?>">Logout</a>
            </li>
          <?php }else{ ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('login/') ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('registrasi/') ?>">Daftar</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>