<?php get_header(); ?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">

     <?php get_sidebar(); ?> 

      <div class="small-12 medium-7 medium-offset-1 end columns">
        <div class="primary">
            <div class="leader">
                <h1><?php wp_title( '' ); ?> Blog Post</h1>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="post">
                    <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
                    <h2><?php echo strip_tags( get_the_excerpt() ) ; ?></h2>
                    <ul class="post-meta no-bullet">
                        <li class="author">
                            <span class="wpt-avatar small">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                            </span>
                            by <?php the_author_posts_link(); ?>
                        </li>
                        <li class="cat">in <?php the_category( ' ' ); ?></li>
                        <li class="date">in <?php the_time( 'F j, Y' ); ?></li>
                    </ul>
                    <?php if( get_the_post_thumbnail() ) : ?>
                    <div class="img-container">
                        <?php the_post_thumbnail('large' ); ?>
                    </div>
                    <?php endif; ?>
                </article>

            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>