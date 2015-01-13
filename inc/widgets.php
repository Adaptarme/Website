<?php
/**
 * Funciones de los widgets.
 *
 * @package WordPress
 * @subpackage Aadptarme
 * @since Adaptar.ME 0.2.0
 */

if ( ! function_exists( 'adaptarme_register_taxonomy_course' ) ) :
/**
 * Usamos esta funcion para remover los widgets por defectos.
 * 
 * @link http://codex.wordpress.org/Function_Reference/unregister_widget 
 * 
 * @uses unregister_widget
 */
add_action( 'widgets_init', 'adaptarme_remover_widgets' );
function adaptarme_remover_widgets() {
    unregister_widget( 'WP_Widget_Pages' );
    unregister_widget( 'WP_Widget_Calendar' );
    unregister_widget( 'WP_Widget_Archives' );
    unregister_widget( 'WP_Widget_Links' );
    unregister_widget( 'WP_Widget_Meta' );
    unregister_widget( 'WP_Widget_Search' );
    //unregister_widget('WP_Widget_Text');
    unregister_widget( 'WP_Widget_Categories' );
    unregister_widget( 'WP_Widget_Recent_Posts' );
    unregister_widget( 'WP_Widget_Recent_Comments' );
    unregister_widget( 'WP_Widget_RSS' );
    unregister_widget( 'WP_Widget_Tag_Cloud' );
    //unregister_widget('WP_Nav_Menu_Widget');
}
endif;