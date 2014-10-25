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
			<h2>Hola.</h2>
			<p class="lead">Somos un equipo de profesionales que se dedican al desarrollo de software y la capacitación en las últimas tecnologías.</p>
			<div class="col-sm-6 col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/easel.png" class="img-responsive">
				<h3>Consultoría</h3>
				<p>Especialistas altamente capacitados para asesorarlos en todo.</p>
			</div>
			<div class="col-sm-6 col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/dev.png" class="img-responsive">
				<h3>Desarrollo</h3>
				<p>Desarrollamos soluciones profesionales, robustas y escalables.</p>
			</div>
			<div class="col-sm-6 col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bookshelf.png" class="img-responsive">
				<h3>Capacitación</h3>
				<p>Cursos para usuarios, directores de proyectos o diseñadores.</p>
			</div>
		</div><!-- .services -->
		
<?php
get_footer();