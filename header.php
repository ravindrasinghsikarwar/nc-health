<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script>
  var adminurl = '<?php echo admin_url('admin-ajax.php '); ?>';
  var tempurl = '<?php echo get_template_directory_uri(); ?>';
</script>
<?php google_analytics_code(); ?>
<script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=cznasbf1wwdmehvsp6idva" async="true"></script>
</head>

<body <?php body_class(); ?>>
	<?php //site_loader(); ?>
	<?php scipt_print_in_body(); ?>

	<div id="page" class="hfeed site">
		
		<header id="masthead" class="site-header">		
		    <div class="container">
		        <div class="header-main">
		            <div class="logo">
		                <a href="<?php echo site_url(); ?>" title="">
		                    <?php if( get_field('header_logo', 'option') ): ?><img src="<?php the_field('header_logo', 'option'); ?>" alt=""><?php endif; ?>
		                </a>
						<?php
						$description = get_bloginfo( 'description', 'display' );
						if ( $description || is_customize_preview() ) :
							?>
								<p class="site-description">
									<?php echo $description; ?>
								</p>
						<?php endif; ?>
		            </div>
					
		            <div class="header-menu">
		                <div class="enumenu_ul">
		                    <?php wp_nav_menu(array('menu_class' => 'menu_main', 'menu' => 'Header Menu', 'theme_location' => 'primary',)); ?>
		                </div>
		            </div>
		        </div>
		    </div>
		</header><!-- #masthead -->


