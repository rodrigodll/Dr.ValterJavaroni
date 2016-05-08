<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header role="banner">
		<div id="header">
			<div class="meioHeader">
				<div class="container">					
              
              <div class="col-xs-3 logo">              
                <h1 id="logo">
                  <a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php //bloginfo( 'name' ); ?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-cda-fiat.png" class="" alt="Valter Javaroni"/>
				</a>
                </h1>
              </div>

            <div class="top-header">
              <div class="col-xs-4 sub-menu">
                <nav>            
                  <ul>
                    <li><a href="#">Urologia</a></li>
                    <li><a href="#">Medicina Sexual</a></li>
                    <li><a href="#">Cirurgia Urológica</a></li>
                    <li><a href="#">Infertilidade</a></li>
                  </ul>
                </nav>        
              </div><!-- col-xs-6 -->
              <div class="col-xs-5 infosHeader">
                <p class="end"><i class="fa fa-map-marker"></i> Rua México 41 / 1801, Centro, RJ</p>
                <p class="tel"><i class="fa fa-phone"></i> (21) 0000-0000</p>
                <p class="facebook"><a href="#" target="_blank" alt="Acesse nosso facebook"><i class="fa fa-facebook-official"></i></a></p>
              </div><!-- col-xs-6 -->
            </div><!-- sub-menu -->

              <div class="col-xs-9 menuHeader">
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
              </div><!-- menuHeader -->
                          

				</div><!-- .cintainer -->
			</div><!-- .site-header-->

		</div><!-- #header -->
	</header>

	<div id="wrapper" class="container">
		<div class="row">
