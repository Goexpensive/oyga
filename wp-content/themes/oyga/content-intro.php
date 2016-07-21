<?php
	
	$num_posts = ( is_front_page() ) ? 3 : -1;

    $args = array(
        'post_type' => 'intro',
        'posts_per_page' => $num_posts,
    );
    $query = new WP_Query( $args );
    $colors = array(
    		'pink',
    		'light-pink',
    		'pink-orange'
    	);


?>

<section id="add-intro">
	<div class="container">

		<div class="row intro-tables">

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
       		<div class="col-md-4">

				<div class="intro-table">
					<div class="icon-holder">
						<img src="<?php the_field('intro_image')?>" alt="" class="icon">
					</div>
					<h4 class=" bold heading <?php echo $colors[$query->current_post] ?>"><?php the_title(); ?></h4>
					<p class="description"><?php echo get_the_content(); ?></p>

				</div>
			</div>

    	<?php endwhile; endif; wp_reset_postdata(); ?>

    	</div>
	</div>
</section>

