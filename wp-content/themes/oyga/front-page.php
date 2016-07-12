
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

<?php get_template_part( 'content', 'intro' ); ?>

<?php get_template_part( 'content', 'services' ); ?>

<?php get_template_part( 'content', 'team' ); ?>

<?php get_template_part( 'content', 'prices' ); ?>


<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content modal-popup">
			<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
			<h3 class="white">Contactanos</h3>
			<form method="post" action="<?php echo get_template_directory_uri(); ?>/test.php" class="popup-form">
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