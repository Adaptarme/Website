<?php
/**
 * El archivo principal de plantilla
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
		<div class="services clearfix">
			<div class="col-md-12">
				<h2>Especialistas en desarrollar soluciones web</h2>
			</div>
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
		</div><!-- .services -->
		
		<div class="services-plus gray clearfix">

			<div class="col-md-2">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/rocket.png" class="img-responsive">
			</div>
			<div class="col-md-10">
				<p class="lead">Nos encargamos desde el análisis conceptual, desarrollo web, diseño de interfaces y experiencia de usuario hasta la arquitectura tecnológica necesaria para soportar las soluciones implantadas mientras el cliente puede seguir centrado en su negocio.</p>
			</div>
		</div><!-- .proyects -->



<?php
//get_sidebar();
get_footer();