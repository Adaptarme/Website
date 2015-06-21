<?php
/**
 * La plantilla para mostrar el pie de página.
 *
 * @package WordPress
 * @subpackage Adaptarme
 * @since Adaptar.ME 0.2.0
 */
?>
      </div><!-- .container -->
    </div><!-- .wrapper -->

  <footer class="footer">
    <div class="container">
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <p class="copyright">Adaptar.ME &copy; 2013-<?php echo date('Y'); ?><br /> <small>Todos los derechos reservados.</small></p>                  
          </div>
          <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
            <ul class="social-links list-inline text-right">
              <li><a href="https://facebook.com/Adaptarme" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
              <li><a href="https://twitter.com/Adaptarme" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
              <li><a href="https://www.youtube.com/c/AdaptarmeAr" target="_blank"><i class="fa fa-youtube-play fa-lg"></i></a></li>
              <li><a href="https://github.com/Adaptarme" target="_blank"><i class="fa fa-github fa-lg"></i></a></li>
            </ul>                  
          </div>
        </div><!-- .row -->
    </div><!-- .container -->
  </footer>
  <!-- build:js /wp-content/themes/dist/js/main.js -->
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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-60276773-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>
</html>