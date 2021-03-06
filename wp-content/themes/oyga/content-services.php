<?php

	$num_posts = ( is_front_page() ) ? 4 : -1;

    $args = array(
        'post_type' => 'service',
        'posts_per_page' => $num_posts,
        'order' => 'ASC'
    );
    $query = new WP_Query( $args );


?>


<section id="services" class="section-top-padded">
	<div class="container">
		<div class="row text-center title margin">
			<h2 class="bold">Nuestra salsa secreta</h2>
		</div>
		<div class="row services">

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
			<div class="col-md-4">
				<div class="service">
					<h3 class="heading bold"> <?php the_title(); ?> </h3>
					<p class="description"><?php echo get_the_content(); ?></p>
				</div>
			</div>
		<?php if(($query->current_post + 1) % 2 != 0) : ?>

			<div class="col-md-4">
			</div>
		<?php endif; ?>

		<?php if(($query->current_post + 1) % 2 == 0) : ?>
		</div>	
		<div class="row services">

		<?php endif; ?>
		<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
	</div>
</section>