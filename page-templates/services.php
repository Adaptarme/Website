<?php
/**
 * Template Name: Servicios
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
get_header(); ?>

<div class="banner">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/10.jpg" class="img-responsive">
	<div class="container">
		<div class="row">
			<div class="intro">
				<h2><?php the_title(); ?></h2>
				<p>Haz crecer tu negocio.</p>
			</div>
		</div>
	</div>
</div><!-- .banner -->

<section role="main">
	<article class="introduccion clearfix">
		<div class="container">
			<div class="row">
		 		<div class="col-md-12">
					<p>Ya nadie duda hoy de la importancia de estar en la Web, al menos para proporcionar los datos de contacto de la empresa. Nos encargamos de dar presencia a su empresa en Internet para ayudar a lograr sus objetivos y proporcionar un mayor valor para su negocio. Contar con un buen posicionamiento ofrece las siguientes oportunidades:</p>
					<ul>
						<li>Atraer mayor tráfico web, que puede traducirse en mayor número de clientes y mayores ventas.</li>
						<li>Facilitar el crecimiento de la marca tanto online como off-line.</li>
						<li>Mayor competitividad y diferenciación de la competencia.</li>
						<li>Minimizar costos y esfuerzos de promociones de otros canales (impresos, radio, TV, etc).</li>
					</ul>
				</div>
			</div>
		</div>
	</article>

	<article class="desarrollo-web clearfix">
		<div class="container">
			<div class="row">
			  	<div class="col-md-4">
		  			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/domains-that-never-sleep.png" class="img-responsive">
		  		</div>
		  		<div class="col-md-8">
		  			<h3>Diseño y Desarrollo Web</h3>
		  			<h4>La web de tu empresa es tu vidriera en el mundo online.</h4>
					<p>Hoy en día la página web es un elemento indispensable para cualquier empresa ya que representa el primer punto de contacto con el cliente en Internet.<br /> Nuestros diseñadores web combinan la funcionalidad, el diseño y el buen gusto a la hora de diseñar y desarrollar su web.</p>
					<ul>
						<li>Paginas adaptadas a los estandares de Google</li>
						<li>Última tecnología en desarrollo</li>
						<li>Adaptadas a dispositivos móviles</li>
						<li>Optimizadas para posicionamiento SEO</li>
						<li>Autoadministrables y dinámicas</li>
					</ul>
		  		</div>
	  		</div>
	  	</div>
  	</article>
		
	<article class="marketing-digital clearfix">
		<div class="container">
			<div class="row">
		  		<div class="col-md-8">
					<h3>Marketing Digital</h3>
					<h4>Diseño, creatividad, rentabilidad y análisis.</h4>
					<p>El marketing digital es la aplicación de las estrategias de comercialización llevadas a cabo en los medios digitales. Buscando influenciar opiniones y opinadores, mejorar los resultados de los motores de búsqueda, y analizando la información que estos medios provean para optimizar el rendimiento de las acciones tomadas.</p>
					<ul>
						<li>SEO</li>
						<li>SEM</li>
						<li>SMM</li>
						<li>Community Manager</li>
						<li>E-mail marketing</li>
					</ul>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/machine.png" class="img-responsive">
		  		</div>
	  		</div>
	  	</div>
	</article>

	<aside class="contacto clearfix">
		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-2">
					<img src="http://0.gravatar.com/avatar/acb6a72647241e558f2f724410e6c1c8" class="img-circle img-responsive">
				</div>
			 	<div class="col-md-7">
			 		<p>Soy Felix Barros,<br />
			 		<span>Llámame al <i>3624-060798</i>.</span></p>
				</div>
			</div>
		</div>
	</aside>	
</section>

</div>
<?php
get_footer();