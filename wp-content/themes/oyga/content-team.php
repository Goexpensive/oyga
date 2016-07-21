<?php

	$num_posts = ( is_front_page() ) ? 1 : -1;

    $args = array(
        'post_type' => 'team',
        'posts_per_page' => $num_posts,
    );
    $query = new WP_Query( $args );


?>


<section id="team" class="section-padded team">
	<div class="container">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="row title text-center">
			<h3 class="heading white bold"><?php echo get_the_content() ?></h3>
		</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

	</div>
</section>