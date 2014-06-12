<?php
/**
 * Veinte Catorce funciones y definiciones.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptarme 1.0
 */


/**
 * Crear un texto elemento title formato agradable y más específica para 
 * la salida de la cabeza del documento, sobre la base de la vista actual.
 *
 * @since Adaptarme 1.0
 *
 * @return string El título filtrado.
 */
function adaptarme_wp_title( $title ) {
	global $paged, $page;

	if ( is_feed() || is_home() || is_front_page() ) {
		return	get_bloginfo( 'name', 'display' );
	}

	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title / " . sprintf( __( 'Página %s', 'adaptarme' ), max( $paged, $page ) );
	}
	
	return trim($title);
}
add_filter( 'wp_title', 'adaptarme_wp_title', 10, 2 );