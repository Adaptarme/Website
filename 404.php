<?php
/**
 * La plantilla para la visualización de las páginas 404 (Not Found)
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */

get_header(); ?>
		<div class="error col-md-8">
			<h2>Ooops... Error 404</h2>
			<h3>Lo sentimos, pero la página que busca no existe.</h3>
			<p>Desafortunadamente, la página que ha solicitado <strong>no se puede mostrar</strong>.
				Parece que ha perdido su camino, ya sea a través de un enlace erróneo o un error en la página que estabas tratando de alcanzar.</p>
			<p>Por favor, siéntase libre de volver a la <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">página principal</a>
		 	o utilizar el cuadro de búsqueda en la parte superior de la página para encontrar la información que estabas buscando. Sentimos mucho las molestias.</p>
		</div><!-- .error -->

<?php
get_footer();