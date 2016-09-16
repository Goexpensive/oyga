<?php get_header(); ?>

<section class="post-template">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="post">
        <header>
            <figure class="post-image">
                <?php the_post_thumbnail('large' ); ?>
            </figure>
        </header>
        <div class="container">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </div>
        <div class="container">
            <div class="post-meta">
                <figure class="author-picture-container">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                </figure>
                <strong><?php echo get_the_author(); ?></strong>
                <time class="post-date" datetime="{{date format='DD-MM-YYYY' lang='es' }}"><?php the_time( 'd/m/Y' ); ?>
            </div>
            <section class="post-content">
                
                <?php the_content(); ?>
                            
             </section>
        </div>
    </article>
    <?php endwhile; endif; ?>
</section>


<?php get_footer(); ?>