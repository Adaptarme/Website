<?php
/**
 * La plantilla predeterminada para mostrar el contenido.
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
		<?php if ( the_type_post() === 'tutorial' ) : ?>
		<h4 class="naranja"><?php echo the_taxonomy( 'name' ); ?></h4>
		<?php endif; ?> 
		<?php the_title( '<h2>', '</h2>' ); ?>
		<!--<div class="lead">
			<?php //the_excerpt(); ?>
		</div>-->
		<div class="paragraphs">
			<?php the_content(); ?>
		</div>
	<?php else : ?>
		<div class="views-row">
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail( 'large', array( 'class' => 'img-responsive' ) ); ?></a>
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