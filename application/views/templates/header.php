<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Perpustakaan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Data Tables -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery-3.3.1.min.js');?>"></script>
 
</head>
<body class="hold-transition dark-mode sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User account -->
      <li class="nav-item dropdown user user-menu">
        <a href="#" class="nav-link" data-toggle="dropdown">
          <span class="username" style="margin-right: 7px;"><?php echo ucfirst($this->session->userdata("name")); ?></span>
          <img src="<?=base_url()?>assets/dist/img/user.png" class="user-image" alt="User Image">
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="<?=base_url()?>assets/dist/img/user.png" class="img-circle">
            <p><?php echo ucfirst($this->session->userdata("name")); ?></p>
          </li>
          <li class="user-footer">
            <a href="<?=site_url('login/logout')?>" class="btn btn-danger float-sm-right">Sign Out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
