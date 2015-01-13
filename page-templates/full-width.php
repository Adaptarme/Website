<?php
/**
 * Template Name: Página Completa
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

get_header(); ?>

	<section class="col-md-12" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'partials/content', 'page' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

	</section>

<?php
get_footer();