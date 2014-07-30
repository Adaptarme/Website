<?php
get_header(); ?>

			<section class="col-md-12" role="main">
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<p>Lo sentimos, no hay posts publicados!</p>
				<?php endif; ?>
			</section>

<?php
get_footer();