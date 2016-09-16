<?php get_header(); ?>

<?php


    $args = array(
        'post_type' => 'post',
    );
    $query = new WP_Query( $args );


?>


<section class="promoted">
    
    <div class="container">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
          if($query->current_post == 0) : 
    ?>
        <article class="promoted-post">
                <a href="<?php the_permalink();?>">
                    <figure class="post-image">
                        <?php the_post_thumbnail('large' ); ?>
                    </figure>
                    <div class="promoted-data">
                        <header class="post-header">
                            <h2 class="post-title"><?php the_title();?></h2>
                        </header>
                        <footer class="post-meta">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                            <p class="author"><?php echo get_the_author(); ?></p>
                            <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}"><?php the_time( 'F j, Y' );?></time>
                        </footer>
                    </div>
                </a>
        </article>
    <?php endif; endwhile; endif; wp_reset_postdata(); ?>        
    </div>
    
</section>

<section id="blog" class="posts-section">
    <div class="container">
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); 
          if($query->current_post > 0) : 
    ?>
        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <?php the_post_thumbnail('small' ); ?>
                    </figure>
                    <h2 class="post-title"><?php the_title();?></h2>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author"><?php echo get_the_author(); ?></p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}"><?php the_time( 'F j, Y' );?></time>
            </footer>
            
        </article>
    <?php endif; endwhile; endif;wp_reset_postdata(); ?>   

    </div>
</section>

<?php get_footer(); ?>