<?php
/**
 * La plantilla para la visualización de páginas Categoría.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>

	<section class="container" role="main">
		<div class="row">
		<?php if ( have_posts() ) : ?>
			<header>
				<h3><?php single_cat_title( '', false ); ?></h3>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>
				<article class="col-md-4">
				<?php get_template_part( 'content', get_post_format() ); ?>
				</article>
			<?php endwhile; ?>
		<?php
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
		</div><!-- .row -->
	</section>

<?php
get_footer();