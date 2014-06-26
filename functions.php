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
        $menu_list .= '</ul>';
    }
    return $menu_list;

}