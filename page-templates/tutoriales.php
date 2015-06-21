<?php
/**
 * Template Name: Tutoriales
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
get_header(); ?>

<?php $query = new WP_Query( array( 'post_type' => array( 'tutorial' ) ) ); ?>
	
<?php if ( $query->have_posts() ) : ?>
	<div class="container">
		<div class="row">
			<section id="grid" class="tutoriales" role="main">

				<div class="posts">

					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						
					<div class="post col-md-4">
						
						<?php get_template_part( 'partials/content', get_post_format() ); ?>
						
					</div>
						
					<?php endwhile; ?>
				
				</div><!-- .posts -->

			</section>
		</div><!-- .row -->
	</div><!-- .container -->

<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php
get_footer();