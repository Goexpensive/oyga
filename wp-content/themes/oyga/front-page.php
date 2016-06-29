
<?php get_header(); ?>
<header id="intro">
	<div class="container">
		<div class="table">
			<div class="header-text">
				<div class="row">
					<div class="col-md-12 text-center">

						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								<h3 class="light white"><?php echo get_the_content(); ?></h3>
								<h1 class="white typed"><?php the_title();; ?></h1>
								<span class="typed-cursor">|</span>
    					<?php endwhile; endif; ?>
					
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<section>
	<div class="cut cut-top"></div>
	<div class="container">
		<div class="row intro-tables">
			<div class="col-md-4">
				<div class="intro-table intro-table-first">
					<h5 class="white heading">Solución 360</h5>
						<div class="item">
							<h4 class="white heading content">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</h5>
						</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="intro-table intro-table-hover">
					<h5 class="white heading hide-hover">Experiencia</h5>
					<div class="bottom">
						<h4 class="white heading small-heading no-margin regular">Más de 5 años de experiencia.</h4>
						<h4 class="white heading small-pt"> Mercado Libre </h4>
						<a href="#" class="btn btn-white-fill expand">Quienes Somos</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="intro-table intro-table-third">
					<h5 class="white heading">Incrementa tus ventas</h5>
					<div class="owl-testimonials bottom">
						<div class="item">
							<h4 class="white heading content">Más de 5 años de experiencia en el ecommerce más grande de Latinoamerica.</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="services" class="section section-padded">
	<div class="container">
		<div class="row text-center title">
			<h2>Servicios</h2>
			<h4 class="light muted">Obtene los mejores mejores resultados utilizando nuestros servicios</h4>
		</div>
		<div class="row services">
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="<?php bloginfo('template_url'); ?>/img/icons/ecommerce.png" alt="" class="icon">
					</div>
					<h4 class="heading">Sitio de Ecommerce</h4>
					<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="<?php bloginfo('template_url'); ?>/img/icons/sales.png" alt="" class="icon">
					</div>
					<h4 class="heading">Canal de venta</h4>
					<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="<?php bloginfo('template_url'); ?>/img/icons/marketing.png" alt="" class="icon">
					</div>
					<h4 class="heading">Posicionamiento</h4>
					<p class="description">A elementum ligula lacus ac quam ultrices a scelerisque praesent vel suspendisse scelerisque a aenean hac montes.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="cut cut-bottom"></div>
</section>
<section id="team" class="section gray-bg">
	<div class="container">
		<div class="row title text-center">
			<h2 class="margin-top">Equipo</h2>
			<h4 class="light muted">Somo el mejor equipo!</h4>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="team text-center">
					<div class="cover" style="background:url('<?php bloginfo('template_url'); ?>/img/team/team-cover1.jpg'); background-size:cover;">
						<div class="overlay text-center">
							<h3 class="white">Marketing</h3>
							<h5 class="light light-white">Incrementa tus ventas como ninguno</h5>
						</div>
					</div>
					<img src="<?php bloginfo('template_url'); ?>/img/team/team3.jpg" alt="Team Image" class="avatar">
					<div class="title">
						<h4>Sergio Elices</h4>
						<h5 class="muted regular">Genio del Marketing</h5>
					</div>
					<button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Contactar</button>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team text-center">
					<div class="cover" style="background:url('<?php bloginfo('template_url'); ?>/img/team/team-cover2.jpg'); background-size:cover;">
						<div class="overlay text-center">
							<h3 class="white">Conversion </h3>
							<h5 class="light light-white">Conviertete en el numero 1 en conversion</h5>
						</div>
					</div>
					<img src="<?php bloginfo('template_url'); ?>/img/team/team1.jpg" alt="Team Image" class="avatar">
					<div class="title">
						<h4>Fabio Vaccaro</h4>
						<h5 class="muted regular">Maestro del ecommerce</h5>
					</div>
					<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Contactar</a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="team text-center">
					<div class="cover" style="background:url('<?php bloginfo('template_url'); ?>/img/team/team-cover3.jpg'); background-size:cover;">
						<div class="overlay text-center">
							<h3 class="white">Negocio</h3>
							<h5 class="light light-white">Se el numero 1 en el mercado</h5>
						</div>
					</div>
					<img src="<?php bloginfo('template_url'); ?>/img/team/team2.jpg" alt="Team Image" class="avatar">
					<div class="title">
						<h4>Matias Compiano</h4>
						<h5 class="muted regular">Mago del negocio</h5>
					</div>
					<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Contactar</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="pricing" class="section">
	<div class="container">
		<div class="row title text-center">
			<h2 class="margin-top white">Precios</h2>
			<h4 class="light white">Elegi tu plan para comenzar con nosotros!</h4>
		</div>
		<div class="row no-margin">
			<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
				<div class="pricing">
					<div class="box-main active" data-img="<?php bloginfo('template_url'); ?>/img/pricing1.jpg">
						<h4 class="white">Solucioón 360</h4>
						<h4 class="white regular light"> 30% <span class="small-font">/ venta</span></h4>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Comenza ahora</a>
						<i class="info-icon icon_question"></i>
					</div>
					<div class="box-second active">
						<ul class="white-list text-left">
							<li>Sitio bonificado</li>
							<li>Platafomas de ecommerce</li>
							<li>Procesadoras de pago</li>
							<li>Inversion en marketing</li>
							<li>Atencion al cliente</li>
						</ul>
					</div>
				</div>
				<div class="pricing">
					<div class="box-main" data-img="<?php bloginfo('template_url'); ?>/img/pricing2.jpg">
						<h4 class="white">Soluciónes individuales</h4>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Consulte los precios</a>
						<i class="info-icon icon_question"></i>
					</div>
					<div class="box-second">
						<ul class="white-list text-left">
							<li>Implementacion del sitio</li>
							<li>Conexion con MercadoLibre</li>
							<li>Conexion procesadoras</li>
							<li>Analisis SEO y SEM</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section section-padded blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="owl-twitter owl-carousel">
					<div class="item text-center">
						<i class="icon fa fa-twitter"></i>
						<h4 class="white light">Una buena experiencia es la clave de la conversión</h4>
						<h4 class="light-white light">#ecommerce #conversion #oygame </h4>
					</div>
					<div class="item text-center">
						<i class="icon fa fa-twitter"></i>
						<h4 class="white light">No pida mas datos de los necesarios</h4>
						<h4 class="light-white light">#ecommerce #conversion #oygame</h4>
					</div>
					<div class="item text-center">
						<i class="icon fa fa-twitter"></i>
						<h4 class="white light">Mantener la promesa de envío	</h4>
						<h4 class="light-white light">#ecommerce #conversion #oygame</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
			<h3 class="white">Contactanos</h3>
			<form action="" class="popup-form">
				<input type="text" class="form-control form-white" placeholder="Nombre">
				<input type="text" class="form-control form-white" placeholder="Email">
				<textarea class="form-control form-white" rows="6"></textarea>
				<div class="checkbox-holder text-left">
					<div class="checkbox">
						<input type="checkbox" value="None" id="squaredOne" name="check" />
						<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
					</div>
				</div>
				<button type="submit" class="btn btn-submit">Enviar</button>
			</form>
		</div>
	</div>
</div>

<?php get_footer(); ?>