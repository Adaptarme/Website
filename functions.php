<?php
/**
 * Funciones y definiciones.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

if ( ! function_exists( 'adaptarme_setup' ) ) :
	/**
	* Instalar Adaptarme.
	* 
	* Configuración de los valores predeterminados del tema y los registros de
	* soporte para diversas características de WordPress.
	*
	* @since Adaptar.ME 1.0
	*/
	function adaptarme_setup() {
        
        // Este tema utiliza wp_nav_menu().
        register_nav_menus( array( 
            'primary'   => 'Menú principal',
            'secondary' => 'Menú secundario',
            ) );

		// Habilitar la compatibilidad con Post Thumbnails.
		add_theme_support( 'post-thumbnails' );
	
    }
endif; // adaptarme_setup
add_action( 'after_setup_theme', 'adaptarme_setup' );

/**
 * Crear un texto para el title con un formato agradable y más específico para 
 * la salida de la cabeza del documento, sobre la base de la vista actual.
 *
 * @since Adaptarme 1.0
 * 
 * @param string $title Titulo de la página.
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
	
	return trim( $title );
}
add_filter( 'wp_title', 'adaptarme_wp_title', 10, 2 );

/**
 * Crear un menu personalizado.
 *
 * @since Adaptarme 1.0
 * @link http://codex.wordpress.org/Function_Reference/wp_get_nav_menu_items#Building_simple_menu_list
 * 
 * @uses get_nav_menu_locations
 * @uses wp_get_nav_menu_object
 * @uses wp_get_nav_menu_items
 * 
 * @param string $menu_name Nombre del menu a mostrar.
 * @return string La lista desordenada con los enlaces del menu.
 */
function simple_menu_list( $menu_name ) {
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        
        // Devuelve un objeto del menú de navegación.
        $menu_items = wp_get_nav_menu_items( $menu->term_id );

        $menu_list = '<ul class="nav navbar-nav nav-effect">';
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
        
        $menu_list .= '<li><a href="#" data-toggle="modal" data-target="#modalContact">Contacto</a></li>';
        $menu_list .= '</ul>';
    }
    return $menu_list;
}

/**
 * Funcion para enviar el email de contacto.
 *
 * @since Adaptarme 1.0
 * 
 * @uses str_replace
 * @uses phpversion
 * @uses mail
 * 
 * @return string Mensaje para el usuario que envio el email
 */
function send_email_contact() {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$content = $_POST['content'];

	if ( $name !== '' && $email !== '' ) :
		$to = get_bloginfo( 'admin_email' ); // Destinatario/s del correo.
		$subject = $name; // Título del correo electrónico a enviar.
		$message = str_replace( "\n.", "\n..", $content );
		$headers = 'From: ' . $email . "\r\n" .
				   'Reply-To: ' . $email . "\r\n" .
				   'X-Mailer: PHP/' . phpversion();
		if ( mail( $to, $subject, $message, $headers ) ) // Enviar correo
			echo '<strong>Felicidades</strong> , tu mensaje fue enviado! :)';
	endif;
	
	die(); // detener la ejecución del script
}
add_action( 'wp_ajax_send_email', 'send_email_contact' ); // ajax para los usuarios registrados
add_action( 'wp_ajax_nopriv_send_email', 'send_email_contact' ); // ajax for not logged in users


// Modificar el ancho y alto del iframe
function bigger_embed_size() { 
	return array( 'width' => 570, 'height' => 321 );
}
add_filter( 'embed_defaults', 'bigger_embed_size' );

/**
 * Agregamos campos en el perfil del usuarios para las redes sociales.
 */
function modify_user_contact_methods( $user_contact ) {

	/* Add user contact methods */
	$user_contact['facebook'] = __('Facebook'); 
	$user_contact['twitter'] = __('Twitter');

	return $user_contact;
}
add_filter('user_contactmethods', 'modify_user_contact_methods');

/**
 * Función para mostrar una lista con las redes sociales del autor.
 */
function social_author( $userID ) {
	$twitter = get_the_author_meta('twitter', $userID); 
	$facebook = get_the_author_meta('facebook', $userID);

	if ( $twitter || $facebook ) :
		$social  = '<ul class="list-inline">';
		if ( $twitter ) {
			$social .= '<li><a href="https://twitter.com/'.$twitter.'" target="_blank">Twitter</a></li>';
		}
	
		if ( $facebook ) {
			$social .= '<li>-</li>';
			$social .= '<li><a href="https://facebook.com/'.$facebook.'" target="_blank">Facebook</a></li>';
		}
		$social .= '</ul>';
		echo $social;
	endif;
}

/*
// Register Custom Post Type
function cursos_post_type() {

	$labels = array(
		'name'                => _x( 'Cursos', 'Post Type General Name', 'adaptarme' ),
		'singular_name'       => _x( 'Curso', 'Post Type Singular Name', 'adaptarme' ),
		'menu_name'           => __( 'Cursos', 'adaptarme' ),
		'parent_item_colon'   => __( 'Parent Product:', 'adaptarme' ),
		'all_items'           => __( 'Todos los Cursos', 'adaptarme' ),
		'view_item'           => __( 'Ver Curso', 'adaptarme' ),
		'add_new_item'        => __( 'Agrega Nuevo Curso', 'adaptarme' ),
		'add_new'             => __( 'Añadir nuevo', 'adaptarme' ),
		'edit_item'           => __( 'Editar Curso', 'adaptarme' ),
		'update_item'         => __( 'Actualizar curso', 'adaptarme' ),
		'search_items'        => __( 'Buscar cursos', 'adaptarme' ),
		'not_found'           => __( 'No products found', 'adaptarme' ),
		'not_found_in_trash'  => __( 'No products found in Trash', 'adaptarme' ),
	);
	$args = array(
		'label'               => __( 'curso', 'adaptarme' ),
		'description'         => __( 'Cursos information pages', 'adaptarme' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats' ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-welcome-learn-more',
		'can_export'          => true,
		'has_archive'         => true,
		'permalink_epmask'    => EP_WIKI,
		'rewrite' => true,
		//'rewrite' => array( 'slug' => 'curso', 'with_front' => true, 'feeds' => true ),
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'curso', $args );

}
// Hook into the 'init' action
add_action( 'init', 'cursos_post_type', 0 );*/

// Crear una taxonomy para los posts de los cursos.
// @link http://codex.wordpress.org/Function_Reference/register_taxonomy
function create_taxonomy_course() {

	$labels = array(
		'name'                       => _x( 'Cursos', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Curso', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Cursos', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'                  => true
		//'rewrite'                    => array( 'slug' => __( 'curso', 'text_domain' ) )
	);
	register_taxonomy( 'course', array( 'post' ), $args );

}
add_action( 'init', 'create_taxonomy_course', 0 );

// Función para obtener el slug de una entrada o página.
// @link http://www.wprecipes.com/wordpress-function-to-get-postpage-slug
function the_slug() {
    $post_data = get_post( $post->ID, ARRAY_A );
    $slug = $post_data['post_name'];
    return $slug; 
}