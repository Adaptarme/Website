<?php
/**
 * Insertamos los metas en el head.
 * 
 * @since Adaptar.ME 0.1.2
 * 
 * @uses register_post_type
 */
function adaptarme_register_my_types() {

	$labels = array(
		'name'			 => __( 'Tutoriales', 'adaptarme' ),
		'singular_name'  => __( 'Tutorial', 'adaptarme' ),
		'menu_name'		 => __( 'Tutoriales', 'adaptarme' ),
		'name_admin_bar' => __( 'Tutorial', 'adaptarme' )
		);

	register_post_type( 'tutorial',
		array(
			'labels' 			 => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 5,
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions' )
		)
	);

}
add_action( 'init', 'adaptarme_register_my_types' );
