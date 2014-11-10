<?php
get_header(); ?>
<div class="row">
	<section class="col-md-8" style="margin-bottom: 20px; padding-top: 10px; background-color: #ffffff;" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<p>Lo sentimos, no hay posts publicados!</p>
		<?php endif; ?>
	</section>

	<aside class="col-md-4">
	</aside>
</div>

<?php
get_footer();
