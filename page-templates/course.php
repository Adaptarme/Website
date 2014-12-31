<?php
/**
 * Template Name: Curso
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
get_header(); ?>

	<div class="row">
		<section class="col-md-8 clearfix" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content', 'course' ); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			<aside>
				<h4>Contenido del Curso</h4>
				<hr />
				<?php $query = new WP_Query( array( 'curso' => the_slug( $post->ID ) ) ); ?>
				<?php if ( $query->have_posts() ) : ?>
					<ul>
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
						<li><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</aside>
		</section>

		<div class="col-md-4" role="complementary">
			<aside>
				<h4>Impartido por</h4>
				<hr />
				<div class="author clearfix">
					<?php
					$userID = get_the_author_meta('ID');
					$first_name = get_the_author_meta('first_name', $userID);
					$last_name = get_the_author_meta('last_name', $userID);
					$full_name = "${first_name} ${last_name}";
					?>
					<?php echo get_avatar( $userID, 70, '', $full_name ); ?>
					<h4><?php echo $full_name; ?></h4>
					<p><?php echo the_author_meta( 'description' ); ?></p>
					<div class="text-right">
						<?php social_author( $userID ); ?>
					</div>
				</div>
			</aside>
		</div>
	</div>

<?php
get_footer();