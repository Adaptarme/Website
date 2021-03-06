<?php
/**
 * Funciones y definiciones.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

if ( ! function_exists( 'adaptarme_setup' ) ) :
	/**
	* Instalar Adaptarme.
	* 
	* Configuración de los valores predeterminados del tema y los registros de
	* soporte para diversas características de WordPress.
	*/
	function adaptarme_setup() {

		//Habilitar la compatibilidad con Post Thumbnails.
		add_theme_support( 'post-thumbnails' );
        
        // Este tema utiliza wp_nav_menu().
        register_nav_menus( array( 
            'primary'   => __( 'Menú cabecera', 'adaptarme' ),
            'secondary' => __( 'Menú pie', 'adaptarme' ),
            )
        );
	
    }
endif;
add_action( 'after_setup_theme', 'adaptarme_setup' );

/**
 * Registrar tres áreas de widgets.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @uses register_sidebar
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
 * @link http://codex.wordpress.org/Function_Reference/wp_title 
 *
 * @param string $title Titulo de la página.
 * @param string $sep Separador opcional.
 * @return string El título filtrado.
 */
function adaptarme_wp_title( $title,  $sep  ) {
	global $paged, $page;

	if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		$title = get_bloginfo( 'name', 'display' );
	}

	if ( $paged >= 2 || $page >= 2 ) {
		$title = "${title} / " . sprintf( __( 'Página %s', 'adaptarme' ), max( $paged, $page ) );
	}
	
	return trim( $title );
}
add_filter( 'wp_title', 'adaptarme_wp_title', 10, 2 );

/**
 * Crear un menu personalizado.
 *
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

        $menu_list = "<ul class=\"nav navbar-nav navbar-right\">\r\n";
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= "<li><a href=\"${url}\">${title}</a></li>\r\n";
        }
        $menu_list .= "</ul>\r\n";
    }
    return $menu_list;
}

/**
 * Agregamos campos en el perfil del usuarios para las redes sociales.
 */
function adaptarme_user_contact( $user_contact ) {

	// Añadir métodos de contacto del usuario
	$user_contact['twitter'] = __('Twitter');

	return $user_contact;
}
add_filter( 'user_contactmethods', 'adaptarme_user_contact' );

/**
 * Función para mostrar una lista con las redes sociales del autor.
 *
 * @uses get_the_author_meta
 *
 * @return string Id del usuario
 */
function social_author( $userID ) {
	$twitter = get_the_author_meta('twitter', $userID); 

	if ( isset( $twitter ) ) {
		$social  = "<small>Sígueme en ";
		$social .= "<a href=\"https://twitter.com/${twitter}\" target=\"_blank\">Twitter</a>";
		$social .= "</small>";
		return $social;
	}
}

/**
 * Función para obtener el slug de una entrada o página.
 *
 * @link http://www.wprecipes.com/wordpress-function-to-get-postpage-slug
 *
 * @uses get_post
 * @return string Fragmento de la url amigable
 */
function the_slug( $potsId ) {
    $post_data = get_post( $potsId, ARRAY_A );
    $slug = $post_data['post_name'];
    return $slug; 
}

/**
 * Retorna (name|slug) de la taxonomy.
 *
 * @uses wp_get_post_terms
 */
function the_taxonomy( $return = 'name' ) {
	global $post;
	$taxonomy = wp_get_post_terms( $post->ID, 'curso' );
	if ( ! empty( $taxonomy ) ) {
		return $taxonomy[0]->$return;
	}
}

/**
 * Insertamos los metas en el head.
 *
 * @uses get_bloginfo
 * @uses is_home
 * @uses is_single
 * @uses is_page
 * @uses get_the_title
 * @uses get_permalink
 * @uses get_the_title
 * @uses esc_url
 * @uses has_post_thumbnail
 * @uses get_post_thumbnail_id
 * @uses wp_get_attachment_image_src
 * 
 * @return string Los metas.
 */
function insert_metas_in_head() {

    $metas = '';
    
    if ( ! is_404() ) : // No hacer nada si es un error 404

    	global $post;

    	$metaSiteName = get_bloginfo( 'name' );

    	if ( is_home() ) {
    		$metaTitle = get_bloginfo( 'name' );
    		$metaType = 'website';
    		$metaUrl = esc_url( home_url( '/' ) );
    		$metaDescription = get_bloginfo( 'description', 'display' );
    	} elseif ( is_single() OR is_page() ) {
    		$metaTitle = get_the_title();
    		$metaType = 'article';
    		$metaUrl = get_permalink( $post->ID );
    		$metaDescription = get_the_excerpt();
    	}

    	// Meta description
    	$metas = "<meta name=\"description\" content=\"${metaDescription}\">\r\n";

        // Un título claro y sin marca o indicando el dominio propio.
        $metas .= "<meta property=\"og:title\" content=\"${metaTitle}\">\r\n";

        // Un nombre del sitio
        $metas .= "<meta property=\"og:site_name\" content=\"${metaSiteName}\">\r\n";

        // Una URL sin identificador de sesión o parámetros externos.
        // La URL de identificación para este artículo.
        $metas .= "<meta property=\"og:url\" content=\"${metaUrl}\">\r\n";

        // Una descripción clara, al menos dos frases largas.
        $metas .= "<meta property=\"og:description\" content=\"${metaDescription}\">\r\n";

        // Comprobamos si el artículo tiene una imagen asociada.
        if ( has_post_thumbnail( $post->ID ) ) {
            // Utilice imágenes que son al menos 1200 x 630 píxeles para
            // la mejor visualización en dispositivos de alta resolución.
            $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
            $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
       	    // Esta es una imagen genérica que se verá el mismo para todas las historias.
       	    $metas .= "<meta property=\"og:image\" content=\"${image_attributes[0]}\">\r\n";
        }

        // El tipo de objeto.
        $metas .= "<meta property=\"og:type\" content=\"${metaType}\">\r\n";

        // ID que identifica a su página de Facebook.
        $metas .= "<meta property=\"fb:app_id\" content=\"131615976988772\">\r\n";
    
    endif;
    
    return $metas;
}

// Nuevos tipos de posts.
require get_template_directory() . '/inc/post-types.php';

// Taxonomies nuevas.
require get_template_directory() . '/inc/taxonomies.php';

// Nuevos enlaces permanetes para los post_type y taxonomies.
require get_template_directory() . '/inc/permalinks.php';

// Configuración de los widgets.
require get_template_directory() . '/inc/widgets.php';

// Tags personalizados para este tema.
require get_template_directory() . '/inc/template-tags.php';