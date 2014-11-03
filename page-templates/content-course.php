<?php
/**
 * Template Name: Página Curso
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>">
	<?php the_title( '<h2>', '</h2>' ); ?>
	<?php the_content(); ?>
</article>

<?php
get_footer();