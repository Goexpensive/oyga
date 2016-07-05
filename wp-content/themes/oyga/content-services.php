<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $num_posts,
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );


?>


<section id="services" class="section section-padded">
	<div class="container">
		<div class="row text-center title">
			<h2>Servicios</h2>
			<h4 class="light muted">Obtené los mejores mejores resultados utilizando nuestros servicios</h4>
		</div>
		<div class="row services">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="col-md-4">
				<div class="service">
					<div class="icon-holder">
						<img src="<?php the_field('icon')?>" alt="" class="icon">
					</div>
					<h4 class="heading"><?php the_title(); ?></h4>
					<p class="description"><?php echo get_the_content(); ?></p>
				</div>
			</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
	</div>
	<div class="cut cut-bottom"></div>
</section>