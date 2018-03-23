<?php
/**
 * Created by PhpStorm.
 * User: Nikko
 * Date: 23/03/2018
 * Time: 22:13
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>SobatKos - Sistem Pencari Kos</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url('assets/css/agency.min.css')?>" rel="stylesheet">
	<!--    <link href="--><?php //echo base_url('assets/img/logosobatkos.png')?><!--" rel="shortcut icon"/>-->
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
		<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo base_url('assets/img/Logo/logoupdate1.png')?>" width="120px" height="100px" alt=""/></a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive" style="font-family: Quicksand;">
			<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#services">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#portfolio">Rekomendasi</a>
				</li>
				<li class="nav-item" >
					<a class="nav-link js-scroll-trigger">Kontak Kami</a>
				</li>
			</ul>
			<ul class="navbar-nav text-uppercase ml-auto">
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger"><i class="fa fa-sign-in"></i>  Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url()?>" style="pointer-events: none;color:white;padding-left: 0px !important;;padding-right: 0px !important;" te> | </a>
				</li>
				<li class="nav-item">
					<a class="nav-link js-scroll-trigger">Register</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<!-- Header -->
<header class="masthead">

	<div class="container">

		<div class="intro-text" style="padding-top: 110px;">
			<img src="<?php echo base_url('assets/img/logo.png')?>" width="500" />
			<div class="intro-lead-in">
				<form class="form-horizontal" style="padding-left: 250px; padding-right: 250px"><br>
					<input class="form-control" type="search" placeholder="Search" aria-label="Search">
				</form>
			</div>
			<form class="form-inline">
				<div class="col-md-4"></div>
				<div class="col-md-2" style="position: center">
					<button class="btn btn-info btn-block" type="submit">Filter</button> <!-- ng-click="filterTrigger()" aria-hidden="true" -->
				</div>
				<div class="col-md-2" style="position: center;">
					<button class="btn btn-success btn-block" type="submit">Search</button>
				</div>
				<div class="col-md-4"></div>
			</form>
		</div>
	</div>
</header>
<!-- Contact -->
<section id="contact" style="padding:150px">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading text-uppercase text-light">Hubungi Kami</h2>
				<h3 class="section-subheading text-light">Hubungi Kami melalui E-mail dengan mengisi form dibawah ini</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form id="contactForm" name="sentMessage" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase text-dark" type="submit">Kirim Pesan!</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<span class="copyright">Copyright &copy; SobatKos 2018</span>
			</div>
			<div class="col-md-4">
				<ul class="list-inline social-buttons">
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-instagram"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-twitter"></i>
						</a>
					</li>
					<li class="list-inline-item">
						<a href="#">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4">
				<ul class="list-inline quicklinks">
					<li class="list-inline-item">
						<a href="#" class="text-dark">Privacy Policy</a>
					</li>
					<li class="list-inline-item">
						<a href="#" class="text-dark">Terms of Use</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>
<!-- Contact form JavaScript -->
<script src="<?php echo base_url('assets/js/jqBootstrapValidation.js')?>"></script>
<script src="<?php echo base_url('assets/js/contact_me.js')?>"></script>
<!-- Custom scripts for this template -->
<script src="<?php echo base_url('assets/js/agency.min.js')?>"></script>
</body>
</html>

