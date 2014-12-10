<?php
get_header(); ?>
<div class="row clearfix">
	<section class="col-md-12" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
</div>
<?php
get_footer();