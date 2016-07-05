<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

	$args = array(
			'post_type' => 'post',
			'posts_per_page' => $num_posts,
	        'order' => 'DESC'
		);

	$query = new WP_Query( $args );



?>



<section class="section section-padded blue-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="owl-twitter owl-carousel">

				<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

					<div class="item text-center">
						<i class="icon fa fa-twitter"></i>
						<h4 class="white light"><?php the_title(); ?></h4>
						<h4 class="light-white light"><?php echo get_the_content(); ?> </h4>
					</div>


				<?php endwhile; endif; wp_reset_postdata();?> 	
				</div>
			</div>
		</div>
	</div>
</section>