<?php
/**
 * Template Name: Nosotros
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
get_header(); ?>

<aside class="banner">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/06.jpg" class="img-responsive">
	<div class="container">
		<div class="row">
			<div class="intro">
				<h2><?php the_title(); ?></h2>
				<p>Pasión por nuevos desafíos.</p>
			</div>
		</div>
	</div>
</aside><!-- .banner -->

<section role="main">
	<div class="container clearfix">

		<div class="row">

	 		<article class="col-md-5">

	 		<?php while ( have_posts() ) : the_post(); ?>
	 			<?php the_content(); ?>
			<?php endwhile; ?>	
			
			</article>

			<div class="mision-vision-valor col-md-6 col-md-offset-1 text-center">
				<article class="img-rounded">
					<h3>Misión</h3>
					<p>Acertar estrategias de comunicación efectivas y creativas con una sólida metodología de trabajo.</p>
				</article>
				<article class="img-rounded">
					<h3>Visión</h3>
					<p>Ser referentes en todas las actividades inherentes al marketing digital y el desarrollo web en la región.</p>
				</article>
				<article class="img-rounded">
					<h3>Valores</h3>
					<p>Profesionalismo, respeto, calidad en el trabajo, originalidad, cumplimiento y responsabilidad.</p>
				</article>
			</div>

		</div>

	</div>
		
</section>

</div>
<?php
get_footer();