<?php

	$num_posts = ( is_front_page() ) ? 2 : -1;

	$args = array(
			'post_type' => 'prices',
			'posts_per_page' => $num_posts,
	        'order' => 'ASC'
		);
	$query = new WP_Query( $args );

	$prices_images = array(
						'pricing1',
						'pricing2'
					);

?>

<section id="pricing" class="section">
	<div class="container">
		<div class="row title text-center">
			<h2 class="margin-top white">Precios</h2>
			<h4 class="light white">Elegi tu plan para comenzar con nosotros!</h4>
		</div>
		<div class="row text-center">
			<div class="col-md-2"></div>
			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
				
				<div class="col-md-4 pricings">
					<div class="pricing">

							<h4 class="heading bold orange"><?php the_title(); ?></h4>
							<h5 class="regular light"><?php the_field('price'); ?></h5>
							
							<?php the_content(); ?>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-orange"><?php the_field('label_button'); ?></a>

					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata();?>
			<div class="col-md-2"></div> 
		</div>
	</div>
</section>