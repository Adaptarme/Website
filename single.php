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

		<?php
		if ( comments_open() ) :
			comments_template( '/partials/comments.php' );
		endif;
		?>

	</section>

	<div class="col-md-4">
		<aside class="author clearfix">
		<?php get_template_part( 'partials/author', 'bio' ); ?>
		</aside>

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
