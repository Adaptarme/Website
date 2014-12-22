<?php

// Adding the Open Graph in the Language Attributes
function add_opengraph_doctype( $output ) {
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
add_filter('language_attributes', 'add_opengraph_doctype');

function insert_metas_in_head() {
	
	global $post;

	$metaSiteName = get_bloginfo( 'name' );

	if ( is_home() ) {
		$metaTitle = get_bloginfo( 'name' );
		$metaType = 'website';
		$metaUrl = esc_url( home_url( '/' ) );
		$metaDescription = get_bloginfo( 'description' );
	} elseif ( is_single() OR is_page() ) {
		$metaTitle = get_the_title();
		$metaType = 'article';
		$metaUrl = get_permalink( $post->ID );
		$metaDescription = get_the_excerpt();
	}

	$metas = '<meta charset="' . $metaDescription . '">';

    // Un título claro y sin marca o indicando el dominio propio.
    $metas .= '<meta property="og:title" content="' . $metaTitle  . '">';

    // Un nombre del sitio
    $metas .= '<meta property="og:site_name" content="' . $metaSiteName . '">';

    // Una URL sin identificador de sesión o parámetros externos.
    // La URL de identificación para este artículo.
    $metas .= '<meta property="og:url" content="' . $metaUrl . '">';

    // Una descripción clara, al menos dos frases largas.
    $metas .= '<meta property="og:description" content="' . $metaDescription . '">';

    // Comprobamos si el artículo tiene una imagen asociada.
    if ( has_post_thumbnail( $post->ID ) ) {
        // Utilice imágenes que son al menos 1200 x 630 píxeles para
        // la mejor visualización en dispositivos de alta resolución.
        $post_thumbnail_id = get_post_thumbnail_id( $post->ID );
        $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, 'full' );
       	// Esta es una imagen genérica que se verá el mismo para todas las historias.
       	$metas .= '<meta property="og:image" content="' . $image_attributes[0] . '">';
    }

    // El tipo de objeto.
    $metas .= '<meta property="og:type" content="' . $metaType . '">';

    // ID que identifica a su página de Facebook.
    $metas .= '<meta property="fb:app_id" content="131615976988772">';

    return $metas;

}