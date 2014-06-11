<?php
/**
 * El archivo principal de plantilla
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
    
    <aside class="sticky col-md-12">
        <a href="http://www.youtube.com/playlist?list=PLmpZi4g2hDnmS3gq6J1cHLf_pDT6maOS6" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/curso-basico-de-laravel.jpg" class="img-responsive" alt="Curso básico de Laravel"/></a>
    </aside>
    <section role="main">
        <div class="col-md-8">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Lo sentimos, no hay posts publicados!</p>
        <?php endif; ?>
        </div>
        <div class="col-md-4"></div>
    </section>

<?php
//get_sidebar();
get_footer();