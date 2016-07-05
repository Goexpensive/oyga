<?php
	
	$num_posts = ( is_front_page() ) ? 3 : -1;

    $args = array(
        'post_type' => 'intro',
        'posts_per_page' => $num_posts,
    );
    $query = new WP_Query( $args );

    $wpo_intro_class = array(
    	'intro-table-first',
    	'intro-table-second',
    	'intro-table-third'
    );

?>

<section>
	<div class="cut cut-top"></div>
	<div class="container">

		<div class="row intro-tables">

		<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
			
       		<div class="col-md-4">
       			
       			<?php
       				$wpo_primary_class = $wpo_intro_class[$query->current_post];
       				$wpo_secondary_class = 'item';
       				$wpo_button = get_field( 'button_to_additional_info' );
       				if( $wpo_button ){
       					$wpo_primary_class .= ' intro-table-hover';
       					$wpo_secondary_class = 'bottom';
       				} 
				?>

				<div class="intro-table <?php echo $wpo_primary_class ?>">
					<h5 class="white heading hide-hover"><?php the_title(); ?></h5>
					<div class="<?php echo $wpo_secondary_class?>" >
						<h4 class="white heading small-heading no-margin regular"><?php echo get_the_content(); ?></h4>
						
						<?php if( get_field( 'secondary_description' ) ) : ?>
						
						<h4 class="white heading small-pt"><?php the_field('secondary_description') ?></h4>
						
						<?php 
							endif;
							if( get_field( 'button_to_additional_info' ) ) : 
						?>

						<a href="#" class="btn btn-white-fill expand"><?php the_field('button_to_additional_info') ?></a>
						
						<?php endif; ?>

					</div>

				</div>
			</div>

    	<?php endwhile; endif; wp_reset_postdata(); ?>

    	</div>
	</div>
</section>

