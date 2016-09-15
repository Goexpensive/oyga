<?php get_header(); ?>

<section class="promoted">
    
    <div class="container">
        <article class="promoted-post">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                    </figure>
                    <div class="promoted-data">
                        <header class="post-header">
                            <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                        </header>
                        <footer class="post-meta">
                            <img src="https://platzi.com/blog/wp-content/authors/Anna%20Heim-7.jpeg" class="avatar photo" alt="Anna Heim" width="35" height="35">
                            <p class="author">Sergio Zafra</p>
                            <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
                        </footer>
                    </div>
                </a>
        </article>    
    </div>
    
<section>

<section id="blog" class="posts-section">
    <div class="container">

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>

        <article class="post">
            <header class="post-header">
                <a href="">
                    <figure class="post-image">
                        <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
                        <h2 class="post-title">Mejora tu calidad de vida aprendiendo a administrar tu dinero</h2>
                    </figure>
                </a>
            </header>
            <footer class="post-meta">
                <p class="author">Sergio Zafra</p>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='MM-DD-YYYY'}}">septiembre 14 2016</time>
            </footer>
            
        </article>


    </div>
</section>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">

     <?php get_sidebar(); ?> 

      <div class="small-12 medium-7 medium-offset-1 end columns">
        <div class="primary">
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