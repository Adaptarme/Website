<?php
/**
 * Template Name: Página Completa
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_header(); ?>

<div class="row">
	<section class="col-md-12" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
</div>

<?php
get_footer();