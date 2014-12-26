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
 * Registrar tres áreas de widgets.
 *
 * @since Adaptar.ME 1.0
 */
function adaptarme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar primaria', 'adaptarme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Barra lateral principal que aparece a la izquierda.', 'adaptarme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4><hr />',
	) );
}
add_action( 'widgets_init', 'adaptarme_widgets_init' );

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

// Función para obtener el slug de una entrada o página.
// @link http://www.wprecipes.com/wordpress-function-to-get-postpage-slug
function the_slug( $id ) {
    $post_data = get_post( $id, ARRAY_A );
    $slug = $post_data['post_name'];
    return $slug; 
}

require get_template_directory() . '/inc/custom-post-taxonomy-permalinks.php';
require get_template_directory() . '/inc/meta-tag-head.php';
require get_template_directory() . '/inc/widgets.php';