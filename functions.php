<?php
/**
 * Veinte Catorce funciones y definiciones.
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
	
	return trim($title);
}
add_filter( 'wp_title', 'adaptarme_wp_title', 10, 2 );

/**
 * Crear una lista con las migas de pán.
 *
 * @since Adaptarme 1.0
 * @link http://cazue.com/articles/wordpress-creating-breadcrumbs-without-a-plugin-2013
 * @return string La lista desordenada con los enlaces.
 */
function the_breadcrumb() {
    if (! is_home() ) {
    	global $post;
    	echo '<ol class="breadcrumb">';
        echo '<li><a href="' . get_option('home') . '">';
        echo '<span class="glyphicon glyphicon glyphicon-home"></span>';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category( ' </li><li> ' );
            if ( is_single() ) {
                echo '</li><li class="active">';
                the_title();
                echo '</li>';
            }
        } elseif ( is_page() ) {
            if( $post->post_parent ) {
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li>';
                }
                echo $output;
                echo '<strong title="' . $title . '"> ' . $title . '</strong>';
            } else {
                echo '<li><strong> ' . get_the_title() . '</strong></li>';
            }
        }
        echo '</ol>';
    } // end is_home()
    /*elseif ( is_tag() ) { single_tag_title(); }
    elseif ( is_day() ) { echo "<li>Archive for " . the_time( 'F jS, Y' ) . "</li>"; }
    elseif ( is_month() ) { echo "<li>Archive for " . the_time( 'F, Y' ) . "</li>"; }
    elseif ( is_year() ) { echo "<li>Archive for " . the_time( 'Y' ) . "</li>"; }
    elseif ( is_author() ) { echo "<li>Author Archive</li>"; }
    elseif ( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) { echo "<li>Blog Archives</li>"; }
    elseif ( is_search() ) { echo"<li>Search Results</li>"; }*/
}