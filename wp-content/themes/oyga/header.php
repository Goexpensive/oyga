<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="description" content="Oyga.me, te ayudamos a desembarcar en el mundo de las ventas online. Con nosotros no pagas ningún costo fijo. Pagas por lo que vendes, ahora y siempre." >
	<meta name="author" content="Fabio Vaccaro" >
	<meta name="google-site-verification" content="mrbQfCyarlJDHQNrTsn8wYco6-c0N9E8_Cca4xjgx_I" />
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
				<a class="navbar-brand" href="#"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" data-active-url="<?php bloginfo('template_url'); ?>/img/logo.png" alt="Logo de Oyga.me"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li class="active"><a href="#intro">Intro</a></li>
					<li><a href="#services">Que hacemos</a></li>
					<li><a href="#pricing">Precios</a></li>
					<li><a href="#form" class="btn small btn-white-fill">CONTACTANOS</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>