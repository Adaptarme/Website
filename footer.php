<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
?>
		</div><!-- .row -->
	</div><!-- .container -->
<footer class="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<p class="text-left">Desarrollado con <span title="Amor">&#10084;</span> por Geeks</p>
			</div>
			<div class="col-md-6">
				<ul class="social text-right list-inline">
				<li><a href="https://www.facebook.com/Adaptarme" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/Adaptarme" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://plus.google.com/113406858234515973523" rel="publisher" target="_blank"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="https://github.com/Adaptarme" target="_blank"><i class="fa fa-github"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCchyiTcrctsH92crCQo0PmQ" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
    </div><!-- .container -->
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
<!-- Modal -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  	<form id="formContact" class="modal-content" method="POST" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Contacta con nosotros</h4>
      </div>
      <div class="modal-body">
      	<div class="form-group">
      		<label for="name">Nombre</label>
      		<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su nombre completo">
      	</div>
      	<div class="form-group">
      		<label for="email">Correo</label>
      		<input type="email" class="form-control"name="email" id="email" placeholder="Ingrese su correo">
      	</div>
      	<div class="form-group">
      		<label for="email">Mensaje</label>
      		<textarea class="form-control" name="content" id="content" rows="3" placeholder="Escriba su mensaje"></textarea>
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="sendContact">Enviar mensaje</button>
      </div>
    </form>
  </div>
</div>