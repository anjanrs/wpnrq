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
<script src="https://cdn.optimizely.com/js/8554830379.js"></script>
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
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
          'walker' => new Custom_Nav_Walker_Menu()
				) );
			?>
          </div>
        </div>
    </div>

	<div id="content" class="site-content">
