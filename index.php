<?php
/**
 * La pagina principal del sitio web
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
	
<div class="row">
	<aside class="col-md-12">
	<div class="services clearfix">
		<div class="a">
		<div class="tini"></div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner2.jpg" class="img-responsive">
			<div class="intro">
				<h2>Hola.</h2>
				<p class="lead">Somos un equipo de profesionales que se dedican al desarrollo de software y a la capacitación en las últimas tecnologías.</p>
			</div>		
		</div><!-- .a -->
		<div class="b">
			<div class="col-lg-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/easel.png" class="img-responsive">
				<h3>Consultoría</h3>
				<p>Especialistas altamente capacitados para asesorarlos en todo.</p>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dev.png" class="img-responsive">
				<h3>Desarrollo</h3>
				<p>Desarrollamos soluciones profesionales, robustas y escalables.</p>
			</div>
			<div class="col-lg-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bookshelf.png" class="img-responsive">
				<h3>Capacitación</h3>
				<p>Cursos para usuarios, directores de proyectos o diseñadores.</p>
			</div>
		</div><!-- .b -->
		</div><!-- .services -->
	</aside>

	<section id="grid" class="posts clearfix" role="main">
			<h2>Descubre las últimas publicaciones</h2>
			<div id="posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="post col-md-4">
					<?php get_template_part( 'content', get_post_format() ); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
	</section><!-- .posts -->
</div><!-- .row -->
		
<?php
get_footer();