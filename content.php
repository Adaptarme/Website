                <article id="post-<?php the_ID(); ?>">
                	<?php if ( is_single() || is_category() || is_archive() ) : ?>
                		<?php
                		the_title( '<h3>', '</h3>' );
                		the_content();
                		?>
                	<?php else : ?>
                		<?php the_title( '<h4 class="media-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' ); ?>
						<?php the_excerpt(); ?>
                	<?php endif; ?>
				</article>