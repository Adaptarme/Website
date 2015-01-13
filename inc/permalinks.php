<?php
/**
 * Crear la estructura permalink URLs para los tipos
 * de post personalizados que incluyen todos los términos
 * de los padres de una taxonomía personalizada.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

function adaptarme_add_clinic_permastructure() {
	global $wp_rewrite;

	// Agregamos las estructuras de las nuevas URLs
	add_permastruct( 'curso', 'curso/%curso%', false );
	add_permastruct( 'tutorial', 'tutorial/%tutorial%', false );

	// Refrescar la memoria caché
	$wp_rewrite->flush_rules();
}
add_action( 'wp_loaded', 'adaptarme_add_clinic_permastructure' );

function adaptarme_recipe_permalinks( $permalink, $post ) {
	if ( $post->post_type !== 'tutorial' ) {
		return $permalink;
	}

	$terms = get_the_terms( $post->ID, 'curso' );
	
	if ( !$terms ) {
		return str_replace( '%curso%', '', $permalink );
	}

	$post_terms = array();
	foreach ( $terms as $term ) {
		$post_terms[] = $term->slug;
	}

	return str_replace( '%curso%', implode( ',', $post_terms ) , $permalink );
}
add_filter( 'post_type_link', 'adaptarme_recipe_permalinks', 10, 2 );

function adaptarme_add_term_parents_to_permalinks( $permalink, $term ) {
	$term_parents = get_term_parents( $term );

	foreach ( $term_parents as $term_parent ) {
		$permlink = str_replace( $term->slug, $term_parent->slug . ',' . $term->slug, $permalink );
	}

	return $permlink;
}
add_filter( 'term_link', 'adaptarme_add_term_parents_to_permalinks', 10, 2 );


function get_term_parents( $term, &$parents = array() ) {
	$parent = get_term( $term->parent, $term->taxonomy );
	
	if ( is_wp_error( $parent ) ) {
		return $parents;
	}
	
	$parents[] = $parent;

	if ( $parent->parent ) {
		get_term_parents( $parent, $parents );
	}

    return $parents;
}