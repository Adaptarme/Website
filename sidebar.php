<?php
/**
 * La barra lateral contiene la principal área de widget.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
?>
<div class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div><!-- #secondary -->