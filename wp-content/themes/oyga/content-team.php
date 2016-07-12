<?php

	$num_posts = ( is_front_page() ) ? 3 : -1;

    $args = array(
        'post_type' => 'team',
        'posts_per_page' => $num_posts,
    );
    $query = new WP_Query( $args );


?>


<section id="team" class="section gray-bg">
	<div class="container">
		<div class="row title text-center">
			<h2 class="margin-top">Equipo</h2>
			<h4 class="light muted">Somo el mejor equipo!</h4>
		</div>
		<div class="row">

			<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

			<div class="col-md-4">
				<div class="team text-center">
					<div class="cover" style="background:url('<?php the_field('background'); ?>'); background-size:cover;">
						<div class="overlay text-center">
							<h3 class="white"><?php the_field( 'job_title' ) ?></h3>
							<h5 class="light white"><?php the_field( 'job_description' ) ?></h5>
						</div>
					</div>
					<img src="<?php the_field( 'avatar' ) ?>" alt="Team Image" class="avatar">
					<div class="title">
						<h4><?php the_title(); ?></h4>
						<h5 class="muted regular"><?php echo get_the_content(); ?></h5>
					</div>
					<button data-toggle="modal" data-target="#modal1" class="btn btn-orange-fill">Contactar</button>
				</div>
			</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

		</div>
	</div>
</section>