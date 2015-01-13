<?php
/**
 * La plantilla que se utiliza para la visualización de contenido de los cursos.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

?>

<article id="post-<?php the_ID(); ?>">
	<?php the_title( '<h2>', '</h2>' ); ?>
	<div class="paragraphs">
		<?php the_content(); ?>
	</div>
</article>