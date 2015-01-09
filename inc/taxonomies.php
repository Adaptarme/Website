<?php
/**
 * Registramos una taxonomy Cursos para los tutoriales.
 *
 * @link http://codex.wordpress.org/Taxonomies
 *
 * @uses register_taxonomy
 */
function register_my_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Cursos', 'Todos los cursos', 'adaptarme' ),
		'singular_name'              => _x( 'Curso', 'Ver curso', 'adaptarme' ),
		'menu_name'					 => __( 'Cursos', 'adaptarme' ),
		'all_items'					 => __( 'Todos los cursos', 'adaptarme' ),
		'edit_item'					 => __( 'Editar curso', 'adaptarme' ),
		'view_item'					 => __( 'Ver curso', 'adaptarme' ),
		'update_item'				 => __( 'Editar curso', 'adaptarme' ),
		'add_new_item'				 => __( 'Añadir nuevo curso', 'adaptarme' ),
		'new_item_name' 			 => __( 'Nombre curso nuevo', 'adaptarme' ),
		'separate_items_with_commas' => __( 'Curso', 'adaptarme' )
	);

	$args = array(
		'label' 				=> __( 'Cursos', 'adaptarme' ),
		'labels'				=> $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'hierarchical'          => true
	);

	register_taxonomy( 'curso', array( 'tutorial' ), $args );

}
add_action( 'init', 'register_my_taxonomy', 0 );