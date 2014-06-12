<?php
/**
 * La plantilla predeterminada para mostrar el contenido
 *
 * Se utiliza tanto para el single y el index/archive/search.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php if ( is_single() || is_category() || is_archive() ) : ?>
		<?php the_title( '<h2>', '</h2>' ); ?>
		<?php the_content(); ?>
	<?php else : ?>
		<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
		<?php the_excerpt(); ?>
	<?php endif; ?>
</article>