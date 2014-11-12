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
		<div class="lead">
			<?php the_excerpt(); ?>
		</p>
		<div class="paragraphs">
			<?php the_content(); ?>
		</div>
	<?php else : ?>
		<div class="views-row">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?></a>
			<?php endif; ?>
			<div class="inner">
				<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
				<small class="text-muted">Por Felix Barros</small>
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php endif; ?>
</article>
