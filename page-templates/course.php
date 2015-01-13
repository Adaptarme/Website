<?php
/**
 * Template Name: Curso
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
get_header(); ?>

	<section class="col-md-8 clearfix" role="main">
		
		<?php if ( have_posts() ) : ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'partials/content', 'course' ); ?>
			
			<?php endwhile; ?>
			
		<?php endif; ?>

		<h4>Contenido del Curso</h4>

		<?php $query = new WP_Query( array( 'curso' => the_slug( $post->ID ) ) ); ?>
		<?php if ( $query->have_posts() ) : ?>
		<ul>
			<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<li><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></li>
			<?php endwhile; ?>
		</ul>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

	</section>

	<div class="col-md-4" role="complementary">

		<aside class="author clearfix">
			<h3>Autor del <?php echo the_type_post(); ?></h3>
			<hr />
			<?php get_template_part( 'partials/author', 'bio' ); ?>
		</aside>

	</div>

<?php
get_footer();