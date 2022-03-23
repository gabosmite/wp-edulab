<!DOCTYPE html>
<html>
<head>
	<title>education</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo ASSETS ?>css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i> info@educationpro.com</a>
						</div>
						<div class="top-header-block">
							<a href="tel:+9779813639131" itemprop="telephone"><i class="fas fa-phone"></i> +977 9813639131</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="social-block">
							<ul class="social-list">
								<li><a href=""><i class="fab fa-viber"></i></a></li>
								<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
								<li><a href=""><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href=""><i class="fab fa-twitter"></i></a></li>
								<li><a href=""><i class="fab fa-skype"></i></a></li>
							</ul>
						</div>
						<div class="login-block">
							<a href="">Login /</a>
							<a href="">Register</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<a href="<?php echo get_site_url(); ?>" class="logo-wrap" itemprop="logo">
						<img src="<?php echo ASSETS ?>images/site-logo.jpg" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</a>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="<?php echo get_site_url(); ?>">Home</a></li>
								<li class="menu-parent">Courses
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
										<li class="menu-parent">Child
											<ul class="sub-menu">
												<li><a href="">Grand-child</a></li>
												<li><a href="">Grand-child</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-parent">News
									<ul class="sub-menu">
										<li><a href="#">Child</a></li>
										<li><a href="#">Child</a></li>
									</ul>
								</li>
								<li><a href="<?php echo get_permalink(9); ?>"><?php echo get_the_title(9); ?></a></li>
								<li><a href="">Gallery</a></li>
								<li><a href="<?php echo get_permalink(7); ?>"><?php echo get_the_title(7); ?></a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->