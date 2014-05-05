<?php


function adaptarme_wp_title( $title ) {
	global $paged, $page;
	
	if ( is_feed() || is_home() || is_front_page() )
		return	get_bloginfo( 'name' );

	if ( $paged >= 2 || $page >= 2 )
		$title = "$title / " . sprintf( __( 'Página %s', 'adaptarme' ), max( $paged, $page ) );
	
	return trim($title);
}
add_filter( 'wp_title', 'adaptarme_wp_title', 10, 2 );