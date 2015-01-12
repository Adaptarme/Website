<?php
get_header(); ?>

	<section class="col-md-8 clearfix" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<div class="col-md-3">
		<?php get_sidebar(); ?>
	</div>

<?php
get_footer();