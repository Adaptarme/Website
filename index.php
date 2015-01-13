<?php
/**
 * La pagina principal del sitio web.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 0.2.0
 */

get_header(); ?>

	<?php $query = new WP_Query( array( 'post_type' => array( 'post', 'tutorial' ) ) ); ?>
	
	<?php if ( $query->have_posts() ) : ?>

	<section id="grid" role="main">
			
		<div class="posts">
				
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
				
			<div class="post col-md-4">
				
				<?php get_template_part( 'partials/content', get_post_format() ); ?>
				
			</div>
				
			<?php endwhile; ?>
		
		</div><!-- .posts -->
	
	</section>

	<?php endif; ?>

	<?php wp_reset_postdata(); ?>
		
<?php
get_footer();