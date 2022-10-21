<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title; ?></title>

	<!-- Favicons -->
	<link href="<?= base_url() ?>assets/images/logo.jpg" rel="icon">
	<link href="<?= base_url() ?>assets/profile/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Datatables -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/custom.css">
	<!-- Editor Form -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/summernote/summernote-bs4.min.css">
	<!-- gijgo datapicker -->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/gijgo/css/gijgo.min.css">
	<!-- jQuery -->
	<script src="<?= base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- <script src="https://kit.fontawesome.com/927f007886.js" crossorigin="anonymous"></script> -->
	<link href="<?= base_url(); ?>assets/fontawesome6.2/css/all.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome6.2/css/fontawesome.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome6.2/css/regular.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/fontawesome6.2/css/solid.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
				<!-- <li class="nav-item">
					<a target="_blank" href="<?= base_url(); ?>" class="nav-link">
						<i class="fa fa-fw fa-eye"></i> Lihat Website
					</a>
				</li> -->
			</ul>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item">
					<a class="nav-link" data-widget="fullscreen" href="#" role="button">
						<i class="fas fa-expand-arrows-alt"></i>
					</a>
				</li> -->
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user fa-fw mr-2"></i>
						<span class="d-none d-md-inline"><?= userdata()->fullname; ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown">
						<a href="<?= base_url('configuration/account'); ?>" class="dropdown-item">
							<i class="fa fa-user-circle fa-fw mr-2"></i> My Account
						</a>
						<a href="<?= base_url('configuration/change_password'); ?>" class="dropdown-item">
							<i class="fa fa-lock-open fa-fw mr-2"></i> Change Password
						</a>
						<div class="dropdown-divider"></div>
						<a href="#logoutModal" class="dropdown-item" data-toggle="modal">
							<i class="fa fa-sign-out-alt fa-fw mr-2"></i> Sign Out
						</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
						<i class="fas fa-cog"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="<?= base_url('dashboard') ?>" class="brand-link ">
				<img src="<?= base_url(); ?>assets/images/logo.jpg" alt="Logo" class="brand-image img-circle">
				<span class="brand-text text-white">Database</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image align-self-center">
						<?php $avatar = userdata()->avatar ? userdata()->avatar : $this->config->item('user_avatar_default'); ?>
						<img src="<?= base_url('assets/dist/img/users/') . $avatar ?>" class="img-circle elevation-1" alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= userdata()->fullname; ?></a>
						<p class="p-0 m-0 text-muted small">
							<i class="fa fa-circle text-success"></i>
							<?= userdata()->role; ?>
						</p>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<?php if (userdata()->role == "admin") : ?>
							<!-- <li class="nav-header">Main Menu</li> -->
							<li class="nav-item">
								<a href="<?= base_url('dashboard'); ?>" class="nav-link <?= active_menu('dashboard'); ?>">
									<i class="nav-icon fa-solid fa-house"></i>
									<p>Dashboard</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('guru'); ?>" class="nav-link <?= active_menu('guru'); ?>">
									<i class="nav-icon fa-solid fa-chalkboard-user"></i>
									<p>Guru</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('pegawai'); ?>" class="nav-link <?= active_menu('pegawai'); ?>">
									<i class="nav-icon bi bi-person-workspace"></i>
									<p>Pegawai</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="<?= base_url('siswa'); ?>" class="nav-link <?= active_menu('siswa'); ?>">
									<i class="nav-icon fa-solid fa-users"></i>
									<p>Siswa</p>
								</a>
							</li>
							<!-- <li class="nav-item">
								<a href="<?= base_url('user'); ?>" class="nav-link <?= active_menu('user'); ?>">
									<i class="nav-icon fa-solid fa-users"></i>
									<p>user</p>
								</a>
							</li> -->
							<li class="nav-item nav-secondary <?= open_menu('kelas'); ?> <?= open_menu('mapel'); ?> <?= open_menu('agama'); ?> <?= open_menu('kelamin'); ?> <?= open_menu('status'); ?> <?= open_menu('jabatan'); ?>">
								<a href="#" class="nav-link <?= active_menu('kelas'); ?> <?= active_menu('mapel'); ?> <?= active_menu('agama'); ?> <?= active_menu('kelamin'); ?> <?= active_menu('status'); ?> <?= active_menu('jabatan'); ?>">
									<i class="nav-icon fas fa-ellipsis"></i>
									<p>
										Lainnya
										<i class="right fas fa-arrow-left"></i>
									</p>
								</a>
								<ul class="nav nav-treeview">
									<li class="nav-item">
										<a href="<?= base_url('kelas'); ?>" class="nav-link <?= active_menu('kelas'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon fa-solid fa-people-roof"></i>
											<p>Kelas</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('mapel'); ?>" class="nav-link <?= active_menu('mapel'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon fa-solid fa-book-open"></i>
											<p>Mapel</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('agama'); ?>" class="nav-link <?= active_menu('agama'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon fa-solid fa-mosque"></i>
											<p>Agama</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('kelamin'); ?>" class="nav-link <?= active_menu('kelamin'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon fa-solid fa-venus-mars"></i>
											<p>Kelamin</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('status'); ?>" class="nav-link <?= active_menu('status'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon fa-regular fa-square-check"></i>
											<p>Status</p>
										</a>
									</li>
									<li class="nav-item">
										<a href="<?= base_url('jabatan'); ?>" class="nav-link <?= active_menu('jabatan'); ?>">
											<i class="nav-icon fa-solid fa-grip-lines-vertical"></i>
											<i class="nav-icon bi bi-briefcase-fill"></i>
											<p>Jabatan</p>
										</a>
									</li>
								</ul>
							</li>
						<?php endif; ?>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="logoutModalTitle">Sign Out</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Are you sure?
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<a href="<?= base_url('signout'); ?>" class="btn btn-primary">Sign Out</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0"><?= $title; ?></h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
								<li class="breadcrumb-item active"><?= $title; ?></li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container-fluid">
