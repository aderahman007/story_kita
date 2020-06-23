<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Welcome To My Word</title>
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico'); ?>" />
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/box.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

</head>

<body id="page-top">

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark " id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#"> <span class="fa fa-heart"></span> ASSQ <span class="fa fa-heart"></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">

					<li class="nav-item">
						<a href="<?= base_url('catatan/quotes') ?>"><span class="nav-link js-scroll-trigger" href="">Tambah Quotes</span></a>
					</li>

					<li class="nav-item">
						<a href="<?php echo base_url('catatan'); ?>"><span class="nav-link js-scroll-trigger" href="">Tambah Story</span></a>
					</li>

					<li class="nav-item">
						<span class="nav-link js-scroll-trigger" href="#">Hi
							<?php echo $data_user['nama']; ?>
						</span>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo base_url('login/logout'); ?>">
							<button type="button" class="btn btn-danger btn-sm"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
						</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>