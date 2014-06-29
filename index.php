<?php
/**
 * El archivo principal de plantilla
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
<div class="container">
	<div class="services row">
		<div class="col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/easel.png" class="img-responsive">
			<h3>Consultoría</h3>
			<p>Ayudamos a nuestros clientes a definir su estrategia web.</p>
		</div>
		<div class="col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev.png" class="img-responsive">
			<h3>Desarrollo</h3>
			<p>Desarrollamos soluciones web robustas y escalables.</p>
		</div>
		<div class="col-md-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/speedometer.png" class="img-responsive">
			<h3>SaaS</h3>
			<p>Ofrecemos soluciones de software como servicio.</p>
		</div>
	</div><!-- .row -->
</div>
<div class="container">
	<div class="row">
		<section class="col-md-8" role="main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p>Lo sentimos, no hay posts publicados!</p>
    <?php endif; ?>
    </section>
    </div><!-- .row -->
</div>

<?php
//get_sidebar();
get_footer();