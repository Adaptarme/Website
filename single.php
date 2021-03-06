<?php
/**
 * La plantilla para la visualización de todos los posts y archivos adjuntos.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<section class="col-md-8 clearfix" role="main">
		
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php
			if ( comments_open() ) :
				comments_template( '/partials/comments.php' );
			endif;
			?>

		</section>

		<div class="col-md-4">
	
			<aside class="author clearfix">
				<h3>Autor del <?php echo get_post_type( $post->ID ); ?></h3>
				<?php get_template_part( 'partials/author', 'bio' ); ?>
			</aside>

			<?php if ( get_post_type( $post->ID ) === 'tutorial' ) : ?>
				
				<?php $query = new WP_Query( array( 'curso' => the_taxonomy( 'slug' ) ) ); ?>
				
				<?php if ( $query->have_posts() ) : ?>
				
				<aside id="sticker" class="capitulos panel panel-default">
			
					<div class="panel-heading">
						<h3 class="panel-title"><?php echo the_taxonomy( 'name' ); ?></h3>
					</div>
			
					<ul class="list-group">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<li class="list-group-item"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></li>
					<?php endwhile; ?>
					</ul>
				
				</aside>

				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>
		
	</div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();
