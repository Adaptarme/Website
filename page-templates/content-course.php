<?php
/**
 * Template Name: Página Curso
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_template_part( 'partials/header' ); ?>

<div class="row">
	<section class="col-md-12" role="main">
		<article id="post-<?php the_ID(); ?>">
			<div class="paragraphs">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
			</div>
		</article>
	</section>
</div>

<?php
get_footer();