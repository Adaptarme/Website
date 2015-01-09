<?php
/**
 * Registrar un post type para los tutoriales.
 *
 * @link http://codex.wordpress.org/Post_Types
 * 
 * @uses register_post_type
 */
function adaptarme_register_my_types() {

	/**
	 * Una matriz con el texto de los labels.
	 */
	$labels = array(
		'name'			 => _x( 'Tutoriales', 'Todos los tutoriales', 'adaptarme' ),
		'singular_name'  => _x( 'Tutorial', 'Ver tutorial', 'adaptarme' ),
		'menu_name'		 => __( 'Tutoriales', 'adaptarme' ),
		'name_admin_bar' => __( 'Tutorial', 'adaptarme' )
	);

	/**
	 * Una matriz con los argumentos para configurar el post types.
	 */
	$args = array(
		'label'			     => __( 'Tutoriales', 'adaptarme' ), // Un nombre descriptivo plural
		'labels' 			 => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-welcome-learn-more',
		'has_archive'        => true,
		'taxonomies'         => array( 'post_tag' ),
		'hierarchical' 		 => false,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' )
	);

	/**
	 * Registramos el tipo de post.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 */
	register_post_type( 'tutorial', $args );

}
add_action( 'init', 'adaptarme_register_my_types', 0 );