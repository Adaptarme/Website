<?php
/**
 * La pagina principal del sitio web
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */

get_header(); ?>
	
<div class="row">
	<section id="grid" class="posts clearfix" role="main">
			<!--<h2>Descubre las últimas publicaciones</h2>-->
			<?php $query = new WP_Query( array( 'post_type' => array( 'post', 'tutorial' ) ) ); ?>
			<div id="posts">
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="post col-md-4">
					<?php get_template_part( 'partials/content', get_post_format() ); ?>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<?php wp_reset_postdata(); ?>
	</section><!-- .posts -->
</div><!-- .row -->
		
<?php
get_footer();