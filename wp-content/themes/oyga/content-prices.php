<?php

	$num_posts = ( is_front_page() ) ? 1 : -1;

	$args = array(
			'post_type' => 'prices',
			'posts_per_page' => $num_posts,
	        'order' => 'DESC'
		);
	$query = new WP_Query( $args );


?>

<section id="pricing" class="section-padded">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-2"></div>
			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-4 pricing-primary">
					<h2 class="heading bold"> <?php the_title(); ?> </h2>
					<p class="description"><?php the_field('description'); ?></p>
					<a href="#form" class="btn btn-pink-border"><?php the_field('label_button'); ?></a>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4 pricing-secondary">
					<div class="pricing-list">

							<h3 class="heading bold white pink-bg"><?php the_field('catch_frase'); ?></h3>

							<?php the_content(); ?>

					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata();?>
			<div class="col-md-2"></div> 
		</div>
	</div>
</section>