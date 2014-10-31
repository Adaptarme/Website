<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 1.0
 */
?>

    </div><!-- .wrapper -->

    <footer class="sub-footer">
      <div class="container">
        <div class="inside">
          <div class="row">
            <div class="col-md-12">
              <p>Adaptar.ME &copy; 2013-<?php echo date('Y'); ?></p>                  
            </div>
          </div><!-- .row -->
        </div><!-- .inside -->
      </div><!-- .container -->
    </footer>
  
<script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/jquery/dist/jquery.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/jquery-validation/dist/jquery.validate.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
</body>
</html>
<!-- Modal -->
<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <form id="formContact" class="modal-content" role="form">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Contacta con nosotros</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-success fade in" role="alert">
        </div>
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
          <textarea class="form-control" name="content" id="content" rows="5" placeholder="Escriba su mensaje"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary"  id="sendEmail" data-loading-text="Enviando...">Enviar mensaje</button>
      </div>
    </form>
  </div>
</div>