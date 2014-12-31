<?php
get_header(); ?>

	<div class="row">
		<section class="col-md-8" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>	
			<hr />
			<aside role="complementary">
				<h4>Acerca del autor</h4>
				<div class="clearfix author">
					<?php
					$userID = get_the_author_meta('ID');
					$first_name = get_the_author_meta('first_name', $userID);
					$last_name = get_the_author_meta('last_name', $userID);
					$full_name = "${first_name} ${last_name}";
					?>
					<div class="col-md-2">
						<?php echo get_avatar( $userID, 80, '', $full_name ); ?>
					</div>
					<div class="col-md-10">
						<h4><?php echo $full_name; ?></h4>
						<p><?php echo the_author_meta( 'description' ); ?></p>
						<div class="text-right">
							<?php social_author( $userID ); ?>
						</div>
					</div>
				</div>
			</aside>
		</section>

		<div class="col-md-4">
			<?php if ( the_type_post() === 'tutorial' ) : ?>
			<aside class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Capítulos</h3>
				</div>
				<?php $query = new WP_Query( array( 'curso' => the_taxonomy( 'slug' ) ) ); ?>
				<?php if ( $query->have_posts() ) : ?>
					<ul class="list-group">
					<?php while ( $query->have_posts() ) : $query->the_post(); ?>
					<li class="list-group-item"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</aside>
			<?php endif; ?>
		</div>	
	</div>

<?php
get_footer();
