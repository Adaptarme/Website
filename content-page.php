<?php
/**
 * La plantilla que se utiliza para la visualización de contenido de la página
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
?>

<article id="post-<?php the_ID(); ?>">
	<?php the_title( '<h2>', '</h2>' ); ?>
	<?php the_content(); ?>
</article>
