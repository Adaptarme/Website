<?php
/* Crear la estructura permalink URLs para los tipos
   de post personalizados que incluyen todos los términos
   de los padres de una taxonomía personalizada.
/*

Term Archive Pages:
 - http://example.com/recipes/dinner/
 - http://example.com/recipes/breakfast,brunch/

Single Recipe Pages:
 - http://example.com/recipes/dinner/soup-title/
 - http://example.com/recipes/breakfast,brunch/egg-dish-title/

*/

// Se ejecuta después de WordPress ha terminado de cargar,
// pero antes de que se envíen los encabezados.
add_action( 'init', 'register_my_types' );

function register_my_types() {

	// recipes => capitulos
	register_post_type( 'tutorial',
		array(
			'labels' => array(
				'name' => __( 'Tutoriales' ),
				'singular_name' => __( 'Tutorial' )
			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true, //array( 'slug' => 'book' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' )
		)
	);

	// occasion => curso
	register_taxonomy( 'curso', array( 'tutorial' ), array( 
			'hierarchical' 			=> true, 
			'label' 				=> 'Cursos',
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true
		)
	);
}

// Add our custom permastructures for custom taxonomy and post
add_action( 'wp_loaded', 'add_clinic_permastructure' );

function add_clinic_permastructure() {
	global $wp_rewrite;

	add_permastruct( 'curso', 'curso/%curso%', false );
	add_permastruct( 'tutorial', 'tutorial/%tutorial%', false );

	// Refrescar la memoria caché regla de reescritura de WordPress
	$wp_rewrite->flush_rules();
}

// Asegúrese de que todos los enlaces en el sitio
add_filter( 'post_type_link', 'recipe_permalinks', 10, 2 );

function recipe_permalinks( $permalink, $post ) {
	if ( $post->post_type !== 'tutorial' )
		return $permalink;

	$terms = get_the_terms( $post->ID, 'curso' );
	
	if ( ! $terms )
		return str_replace( '%curso%', '', $permalink );

	$post_terms = array();
	foreach ( $terms as $term )
		$post_terms[] = $term->slug;

	return str_replace( '%curso%', implode( ',', $post_terms ) , $permalink );
}

// Make sure that all term links include their parents in the permalinks
add_filter( 'term_link', 'add_term_parents_to_permalinks', 10, 2 );

function add_term_parents_to_permalinks( $permalink, $term ) {
	$term_parents = get_term_parents( $term );

	foreach ( $term_parents as $term_parent )
		$permlink = str_replace( $term->slug, $term_parent->slug . ',' . $term->slug, $permalink );

	return $permlink;
}

// Helper function to get all parents of a term
function get_term_parents( $term, &$parents = array() ) {
	$parent = get_term( $term->parent, $term->taxonomy );
	
	if ( is_wp_error( $parent ) )
		return $parents;
	
	$parents[] = $parent;

	if ( $parent->parent )
		get_term_parents( $parent, $parents );

    return $parents;
}