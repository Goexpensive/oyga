<?php
	
	$num_posts = ( is_front_page() ) ? 3 : -1;

    $args = array(
        'post_type' => 'intro',
        'posts_per_page' => $num_posts,
    );
    $query = new WP_Query( $args );


?>

<section>
	<div class="cut cut-top"></div>
	<div class="container">

		<div class="row intro-tables">

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
       		<div class="col-md-4">

				<div class="intro-table">
					<h4 class="orange heading"><?php the_title(); ?></h5>
					<div class="item" >
						<p class="heading"><?php echo get_the_content(); ?></p>

					</div>

				</div>
			</div>

    	<?php endwhile; endif; wp_reset_postdata(); ?>

    	</div>
	</div>
</section>

