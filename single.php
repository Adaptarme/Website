<?php
get_header(); ?>

	<div class="row">
		<section class="col-md-8" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
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
		</div>	
	</div>

<?php
get_footer();
