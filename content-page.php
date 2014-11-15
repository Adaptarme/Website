<?php
/**
 * La plantilla que se utiliza para la visualización de contenido de la página
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>">
	<?php the_content(); ?>
</article>

<?php
get_footer();