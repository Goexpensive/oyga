<?php get_header(); ?>

<section class="post-template">
    <article class="post">
        <header>
            <figure class="post-image">
                <img  width="1200" height="800" class="attachment-full size-full wp-post-image" src="<?php bloginfo('template_url'); ?>/img/test.jpg" />
            </figure>
        </header>
        <div class="container">
            <h1 class="post-title">Consejos de fotografía por Iván Castro [Vídeo]</h1>
        </div>
        <div class="container">
            <div class="post-meta" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person">
                <figure class="author-picture-container">
                    <img src="https://platzi.com/blog/wp-content/authors/Anna%20Heim-7.jpeg" class="avatar photo" alt="Anna Heim" height="40" width="40">
                </figure>
                <strong temprop="name" name="author-name">Anna Heim</strong>
                <time itemprop="datePublished" class="post-date" datetime="{{date format='DD-MM-YYYY' lang='es' }}">septiembre 14 2016</time>
            </div>
            <section class="post-content">
                    <p>Si cuando abres Instagram te preguntas “¿Por qué mis fotos no son tan buenas?”, tengo algo importante que decirte: probablemente no es por no tener un iPhone 7 (¡aunque yo también quiero uno!), sino por desconocer algunos secretos de los profesionales de la fotografía.</p>
<p>Por eso compartimos contigo en el vídeo abajo algunos consejos de fotografía recomendados por Iván Castro, <a href="https://www.instagram.com/ivancastroguatemala/" target="_blank">ivancastroguatemala</a> en Instagram. Este guatemalteco no solo es un gran fotógrafo de lugares increíblemente inspiradores, del polo norte al polo sur, sino que también es un excelente profesor.</p>
<p>De hecho, quizás ya le conozcas por su <a href="https://platzi.com/cursos/photoshop-profesional/?utm_source=blog&amp;utm_medium=textlink&amp;utm_campaign=20160913_PhotoShop_avanzado_EVERYONE" target="_blank">curso de Photoshop avanzado</a> en Platzi, en la cual enseña entre otras cosas cómo optimizar tus fotografías nocturnas, usar efectos avanzados, editar archivos RAW y proteger tus derechos de autor con marcas de agua. Si te interesa la fotografía, es definitivamente un complemento ideal al <a href="https://platzi.com/cursos/photoshop-basico/?utm_source=blog&amp;utm_medium=textlink&amp;utm_campaign=20160913_PhotoShop_LiveSession_EVERYONE" target="_blank">curso básico impartido por Carlos Jiménez</a> (<a href="https://twitter.com/unavacaverde" target="_blank">@unavacaverde</a>).</p>
<p><strong>Sobre el mismo tema: <a href="https://platzi.com/cursos/photoshop-basico/?utm_source=blog&amp;utm_medium=textlink&amp;utm_campaign=20160913_PhotoShop_LiveSession_EVERYONE" target="_blank">Sesión en vivo</a> del curso de Photoshop básico el 14 de septiembre</strong></p>

                    
                                        
                 </section>
        </div>
    </article>
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

                    <?php the_content(); ?>
                    <?php comments_template(); ?>

                  </article>
                

            <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>

</section>


<?php get_footer(); ?>