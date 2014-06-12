<?php
/**
 * El archivo principal de plantilla
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>

    <section class="col-md-8" role="main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Lo sentimos, no hay posts publicados!</p>
    <?php endif; ?>
    </section>

<?php
get_sidebar();
get_footer();