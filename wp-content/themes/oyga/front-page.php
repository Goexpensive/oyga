
<?php get_header(); ?>
<header id="intro">
	<div class="homepage-hero-module">
	    <div class="video-container">
	    	<div class="title-container">
				<div class="table">
					<div class="header-text">
						<div class="row">
							<div class="col-md-12 text-center">

								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
										<h1 class="white bold typed"><?php the_title(); ?></h1>
										<span class="typed-cursor">|</span>
										<h2 class="light white"><?php echo get_the_content(); ?></h2>
										
		    					<?php endwhile; endif; ?>
							
							</div>
						</div>
					</div>
				</div>
			</div>
	        <div class="filter"></div>
	        <video autoplay loop class="fillWidth">
	            <source src="<?php bloginfo('template_url'); ?>/video/For_Wes.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
	            <source src="<?php bloginfo('template_url'); ?>/video/For_Wes.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
	        </video>
	        <div class="poster hidden">
	            <img src="<?php bloginfo('template_url'); ?>/img/For_Wes.jpg" alt="Imagen del video de oyga">
	        </div>
	        <div class="nav-intro">
	            <a class="add-intro-item" href="#add-intro">
	                <h1 class="white">
	                    <i class="fa fa-angle-down"></i>
	                </h1>
	            </a>
        	</div>

	    </div>
	</div>
</header>

<?php get_template_part( 'content', 'intro' ); ?>

<?php get_template_part( 'content', 'services' ); ?>

<?php get_template_part( 'content', 'prices' ); ?>

<?php get_template_part( 'content', 'team' ); ?>

<?php get_template_part( 'content', 'form' ); ?>

<?php get_footer(); ?>