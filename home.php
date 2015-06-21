<?php
/**
 * La pagina principal del sitio web.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 0.2.0
 */

get_header(); ?>

<div id="intro">
	<div class="overlay">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="intro_slider">
						<h2>Hola & Bienvenido</h2>
						<h3>Somos una agencia de Marketing Digital y Desarrollo Web.</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<aside class="services">
	<div class="container">
		<div class="row">
			<div class="b clearfix">
				<div class="col-lg-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1428841902_Analytics.png" class="img-responsive">
					<h3>Consultoría</h3>
					<p>Asesoramiento personalizado en el área del Marketing Digital y Desarrollo Web.</p>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1428841620_Money-Increase.png" class="img-responsive">
					<h3>Marketing Digital</h3>
					<p>Técnicas y estrategias de promoción de bajo costo: SEM, SEO, SMM y E-mail marketing.</p>
				</div>
				<div class="col-lg-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1428841577_Coding-Html.png" class="img-responsive">
					<h3>Desarrollo Web</h3>
					<p>Diseño y desarrollo de páginas web para emprendedores, pymes y empresas.</p>
				</div>
			</div><!-- .b -->
		</div>
	</div><!-- .container -->

</aside><!-- .services -->

		
<?php
get_footer();