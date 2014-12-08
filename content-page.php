<?php
/**
 * La plantilla que se utiliza para la visualización de contenido de la página
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_header(); ?>

<div class="row">
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
</div>

<?php
get_footer();