<?php
get_header(); ?>

<div class="row">
	<section class="col-md-8" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<div class="col-md-3">
		<?php get_widget(); ?>
	</div>

</div>

<?php
get_footer();