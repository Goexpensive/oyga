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
		<div class="row no-margin">
			<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 

				  if($query->current_post == 0) {

				  		$active = 'active';
				  } else {

				  		$active = '';
				  }


			?>

				<div class="pricing">
					<div class="box-main <?php echo $active ?>" data-img="<?php bloginfo('template_url'); ?>/img/<?php echo $prices_images[$query->current_post] ?>.jpg">
						<h4 class="white"><?php the_title(); ?></h4>
						<h4 class="white regular light"><?php the_field('price'); ?></h4>
						<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill"><?php the_field('label_button'); ?></a>
						<i class="info-icon icon_question"></i>
					</div>
					<div class="box-second <?php echo $active ?>">
						<div class="white-list text-left">
							
							<?php echo get_the_content(); ?>

						</div>
					</div>
				</div>

			<?php endwhile; endif; wp_reset_postdata();?> 

			</div>
		</div>
	</div>
</section>