<?php
/**
 * Registramos una categoria para los cursos.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
add_action( 'init', 'register_my_taxonomy' );

function register_my_taxonomy() {

	$labels = array(
		'name' 						 => 'Cursos',
		'singular_name' 			 => 'Curso',
		'menu_name'					 => 'Cursos',
		'all_items'					 => 'Todos los cursos',
		'edit_item'					 => 'Editar curso',
		'view_item'					 => 'Ver curso',
		'update_item'				 => 'Editar curso',
		'add_new_item'				 => 'Añadir nuevo curso',
		'new_item_name' 			 => 'Nombre curso nuevo',
		'separate_items_with_commas' => 'Curso'
		);

	register_taxonomy( 'curso', array( 'tutorial' ), array( 
			'hierarchical' 			=> true, 
			'label' 				=> 'Cursos',
			'labels'				=> $labels,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'update_count_callback' => '_update_post_term_count',
			'query_var'             => true
		)
	);

}