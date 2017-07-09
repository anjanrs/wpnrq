<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpnrq
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<title>Wordpress Test Project</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="content-mobile-menu">
		<div class="mobile-menu-icon">
          <img src="<?php echo(get_template_directory_uri());?>/assets/img/menumobile.png">
        </div>
        <div class="mobile-menu">
           <!--<ul>
              <li><a href="#">about us<span rel="ABOUT US"></span></a></li>
              <li><a href="#">work<span rel="WORK"></span></a></li>
              <li><a href="#">SERVICES<span rel="SERVICES"></span></a></li>
              <li><a href="#">blog<span rel="BLOG"></span></a></li>
              <li><a href="#">research<span rel="RESEARCH"></span></a></li>
              <li><a href="#">careers<span rel="CAREERS"></span></a></li>
              <li><a href="#">contact us<span rel="contact us"></span></a></li>
            </ul>-->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
          </div>
        </div>

	
	</div><!-- #masthead -->
	<div class="content-left">
      
        <div class="content-left-wrapper">
          <div class="logo">
            <a href="/"><img src="<?php echo(get_template_directory_uri());?>/assets/img/logo.png"/></a>
          </div>
          <div class="main-menu">
            <!--<ul>
              <li><a href="#">about us<span rel="ABOUT US"></span></a></li>
              <li><a href="#">work<span rel="WORK"></span></a></li>
              <li><a href="#">SERVICES<span rel="SERVICES"></span></a></li>
              <li><a href="#">blog<span rel="BLOG"></span></a></li>
              <li><a href="#">research<span rel="RESEARCH"></span></a></li>
              <li><a href="#">careers<span rel="CAREERS"></span></a></li>
              <li><a href="#">contact us<span rel="contact us"></span></a></li>
            </ul>-->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
          </div>
        </div>
    </div>

	<div id="content" class="site-content">