<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- .row -->
	</div><!-- #wrapper -->

	<!--<footer id="footer">
		<div class="container">
			<p>&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?> | <?php echo sprintf( __( 'Powered by the <a href="%s" rel="nofollow" target="_blank">Odin</a> forces and <a href="%s" rel="nofollow" target="_blank">WordPress</a>.', 'odin' ), 'http://wpod.in/', 'http://wordpress.org/' ); ?></p>
		</div>
	</footer>footer -->

      <footer role="contentinfo">
        <div class="container">

          <div class="col-xs-5 logo-footer">
            <a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.jpg" class="img-responsive" alt="Logo Valter Javaroni"></a>

            <div class="sub-menu-footer">
              <nav>
                <ul class="nav">
                  <li><a href="#">Urologia</a></li>
                  <li><a href="#">Medicina Sexual</a></li>
                  <li><a href="#">Cirurgia Urológica</a></li>
                  <li><a href="#">Infertilidade</a></li>
                </ul>
              </nav>
            </div>

            <div class="infosFooter">
              <p><span><i class="fa fa-phone"></i></span> (21) 0000-0000</p>
              <p><span><i class="fa fa-envelope-o"></i></span> contato@valterjavaroni.com.br</p>
              <p><span><i class="fa fa-map-marker"></i></span> Rua México 41 / 1801, Centro, RJ</p>
            </div>

          </div>

          <div class="col-xs-3 menuFooter">
            <h2>LINKS</h2>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>  
          </div><!-- menuFooter -->

          <div class="col-xs-4 facebookHeader">
          <br>
          <br>
          <br>
            <div class="fb-page" data-href="https://www.facebook.com/CDAFiat" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" data-width="480"></div>
          </div>

        </div><!-- container -->
        <section id="copyright-powered">
          <div class="container">
            <div class="col-sm-6">
              <p class="copyright"> &copy; <?php echo date( 'Y' ); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a> - <?php _e( 'All rights reserved', 'odin' ); ?></p>
            </div>
            <div class="col-sm-6">
               <p class="powered"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-joao.png" class="img"> João Queiroz</p>
            </div>
          </div>
        </section>
      </footer>


	<?php wp_footer(); ?>
</body>
</html>
