<?php
/**
 * La plantilla predeterminada para mostrar el contenido.
 *
 * Se utiliza tanto para el single y el index/archive/search.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
?>

<article id="post-<?php the_ID(); ?>">

	<?php if ( is_single() || is_category() || is_archive() ) : ?>
		<?php if ( get_post_type( $post->ID ) === 'tutorial' ) : ?>
		<h5 class="naranja text-uppercase"><?php echo the_taxonomy( 'name' ); ?></h5>
		<?php endif; ?> 
		<?php the_title( '<h2>', '</h2>' ); ?>
		<div class="paragraphs">
			<?php the_content(); ?>
		</div>
	<?php else : ?>
		<div class="views-row white">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) ); ?></a>
			<?php endif; ?>
			<div class="inner">
				<?php if ( the_type_post() === 'tutorial' ) : ?>
				<h6 class="naranja"><?php echo the_taxonomy( 'name' ); ?></h6>
				<?php endif; ?> 
				<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
				<?php the_excerpt(); ?>
			</div>
		</div>
	<?php endif; ?>
	
</article>
