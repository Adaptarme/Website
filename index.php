<?php
/**
 * La pagina principal del sitio web
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>

<aside class="services clearfix">
	<div class="a">
	<div class="tini"></div>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner1.jpg" class="img-responsive">
		<div class="intro">
			<h2>Hola.</h2>
			<p class="lead">Somos un equipo de profesionales que se dedican al desarrollo de software y a la capacitación en las últimas tecnologías.</p>
			<button class="btn btn-warning" data-toggle="modal" data-target="#modalContact">Contacta con nosotros</button>
		</div>		
	</div><!-- .a -->
	<div class="b">
		<div class="col-lg-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/easel.png" class="img-responsive">
			<h3>Consultoría</h3>
			<p>Especialistas altamente capacitados para asesorarlos en todo.</p>
		</div>
		<div class="col-lg-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev.png" class="img-responsive">
			<h3>Desarrollo</h3>
			<p>Desarrollamos soluciones profesionales, robustas y escalables.</p>
		</div>
		<div class="col-lg-4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bookshelf.png" class="img-responsive">
			<h3>Capacitación</h3>
			<p>Cursos para usuarios, directores de proyectos o diseñadores.</p>
		</div>
	</div><!-- .b -->
</aside><!-- .services -->

<section class="row" role="main">
	<h2 style="font-weight: 300; margin-bottom: 20px;" class="text-center">Descubre las últimas publicaciones</h2>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="col-md-4">
		<?php get_template_part( 'content', get_post_format() ); ?>
	</article>
	<?php endwhile; endif; ?>
</section>
		
<?php
get_footer();