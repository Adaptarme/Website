<?php
get_header(); ?>
            <section class="col-md-8" role="main">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>
            <?php else : ?>
                <p><?php _e('Lo sentimos, no hay posts publicados!'); ?></p>
            <?php endif; ?>
            </section>
            <div class="col-md-4">.col-md-4</div>
<?php
get_footer();
