<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Oyga[ME]: Tu canal de venta online</title>
	<meta name="author" content="Fabio Vaccaro" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicons/favicon.ico">


	<?php wp_head()	 ?>

</head>

<body <?php body_class(); ?>>
	<div class="preloader">
		<img src="<?php bloginfo('template_url'); ?>/img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" data-active-url="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Intro</a></li>
					<li><a href="#services">Servicios</a></li>
					<li><a href="#team">Equipo</a></li>
					<li><a href="#pricing">Precios</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-orange">Contactanos</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>