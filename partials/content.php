<?php
/**
 * La plantilla predeterminada para mostrar el contenido.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">

	<?php if ( is_single() || is_category() || is_archive() ) : ?>
		<?php if ( get_post_type( $post->ID ) === 'tutorial' ) : ?>
		<?php endif; ?> 
		<?php the_title( '<h2>', '</h2>' ); ?>
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
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php endif; ?>
	
</article>
