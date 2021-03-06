<?php
/**
 * Plantilla para la visualización de páginas.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 0.2.0
 */

get_header(); ?>

	<div class="container">

	<section class="col-md-8 clearfix" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'partials/content', 'page' ); ?>
			
			<?php endwhile; ?>
		
		<?php endif; ?>
	
	</section>

	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

	</div>
<?php
get_footer();