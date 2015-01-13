<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
?>
        </div><!-- .row -->
      </div><!-- .container -->
    </div><!-- .wrapper -->

  <footer class="footer">
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-inline">
              <li><a href="https://facebook.com/Adaptarme" target="_blank">Facebook</a></li>
              <li><a href="https://twitter.com/Adaptarme" target="_blank">Twitter</a></li>
              <li><a href="https://github.com/Adaptarme" target="_blank">GitHub</a></li>
            </ul>                  
          </div>
          <div class="col-md-12">
            <p><small>Adaptar.ME &copy; <?php echo date('Y'); ?></small></p>                  
          </div>
        </div><!-- .row -->
    </div><!-- .container -->
  </footer>
  <!-- build:js js/main.js --> 
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/jquery/dist/jquery.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/jquery-validation/dist/jquery.validate.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/bootstrap/dist/js/bootstrap.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/masonry/dist/masonry.pkgd.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/fitvids/jquery.fitvids.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/prism.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-css.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-javascript.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-git.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-powershell.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-python.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-ruby.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/prismjs/components/prism-php.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/libs/sticky/jquery.sticky.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
  <!-- endbuild -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content"></div>
    </div>
  </div>
</body>
</html>