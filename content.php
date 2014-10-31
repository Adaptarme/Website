<?php
/**
 * La plantilla predeterminada para mostrar el contenido
 *
 * Se utiliza tanto para el single y el index/archive/search.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php if ( is_single() || is_category() || is_archive() ) : ?>
		<?php the_title( '<h2>', '</h2>' ); ?>
		<?php the_content(); ?>
	<?php else : ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark"><img src="http://demo.symphonythemes.com/drupal7/helpdesk/sites/demo.symphonythemes.com.drupal7.helpdesk/files/styles/blog-modern/public/field/image/dubai-69386.resized.jpg" class="img-responsive"></a>
		<?php if ( has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
		<?php endif; ?>
		<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
		<small> por <?php the_author(); ?></small>
		<?php //the_excerpt(); ?>
	<?php endif; ?>
</article>
