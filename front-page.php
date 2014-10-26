<?php
/**
 * La pagina principal del sitio web
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
     
		<div class="services clearfix">
			<h2>Diseñamos y desarrollamos.</h2>
			<p class="lead">Somos un equipo de profesionales que se dedican al desarrollo de software y la capacitación en las últimas tecnologías.</p>
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
		</div><!-- .services -->
		<hr class="half-rule">
		<section class="row" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article class="col-md-4">
				<?php get_template_part( 'content', get_post_format() ); ?>
			</article>
			<?php endwhile; endif; ?>
		</section><!-- .blog -->
		
<?php
get_footer();