<?php
/**
 * La plantilla para la visualización de comentarios.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */

if ( post_password_required() ) {
    return;
}
?>

<div class="comments-area">
    
    <?php
    $commenter = wp_get_current_commenter();
    $aria_req = ( $req ? " aria-required='true'" : '' );
    ?>

    <form action="<?php echo esc_url( home_url( '/wp-comments-post.php' ) ); ?>" method="post">
        <textarea class="form-control" rows="3" name="comment" placeholder="<?php echo __( 'Escriba su comentario aquí...', 'adaptarme' ); ?>"></textarea>
        <div class="row">
            <div class="col-xs-4">
                <input type="text" name="author" class="form-control" value="<?php echo esc_attr( $commenter['comment_author'] ); ?>" placeholder="<?php echo __( 'Nombre', 'adaptarme' ); ?>">
            </div>
            <div class="col-xs-5">
                <input type="email" name="email" class="form-control" value="<?php echo esc_attr(  $commenter['comment_author_email'] ); ?>" placeholder="<?php echo __( 'Correo electrónico', 'adaptarme' ); ?>">
            </div>
            <div class="col-xs-3">
                <button type="submit" name="submit" class="btn btn-primary btn-block"><?php echo __( 'Publicar', 'adaptarme' ); ?></button>
            </div>
        </div>
        <input type="hidden" name="comment_post_ID" value="<?php echo $post->ID; ?>" />
    </form>

    <?php if ( have_comments() ) : ?>
        
        <h5>Todos los comentarios</h5>

        <ul class="list-unstyled">
        <?php
        $args = array(
            'callback'          => 'adaptarme_comment',
            'reverse_top_level' => true,
            'type'              => 'comment',
            'avatar_size'       => 48
        );
        wp_list_comments( $args );
        ?>
        </ul>

    <?php endif; // have_comments() ?>

</div><!-- .comments-area -->