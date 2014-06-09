<?php
get_header(); ?>
	<div class="error col-md-12">
		<h3>Ooops... Error 404</h3>
		<h4>Lo sentimos, pero la página que busca no existe.</h4>
		<p>Revise la dirección introducida y vuelva a intentarlo o haz <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">clic aquí</a> para regresar.</p>
	</div>
<?php
get_footer();
