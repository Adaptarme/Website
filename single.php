<?php
get_header(); ?>

	<div class="container">
		<div class="row">
			<section class="col-md-8" role="main">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<p>Lo sentimos, no hay posts publicados!</p>
			<?php endif; ?>
			</section>
		</div><!-- .row -->
	</div><!-- .container -->
	
<?php
get_sidebar();
get_footer();
