<?php
/**
 * La plantilla que se utiliza para la visualización de contenido de la página.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

?>

<article>
	<h2><?php the_title(); ?></h2>
	<div class="paragraphs">
		<?php the_content(); ?>	
	</div>
</article>
