<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GSJWLF');</script>
<!-- End Google Tag Manager -->
  <link href="https://fonts.googleapis.com/css?family=Kanit:300,300i,400,500,600,700&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Play:400,700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51036043-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51036043-2');
</script>

</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GSJWLF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php do_action( 'wp_body_open' ); ?>
    <!-- START LOADER -->
	<div id="loader">
		<div class="rotating-bg">
			<div>B</div>
		</div>
	</div>
	<!-- END LOADER -->
<div class="layout-container site" id="page">
	<header class="site-header header-main-layout">
		<div id="wrapper-navbar" class="header-wrapper">

			
			<nav id="main-menu-nav" class="navbar_navbar_dark bg_primary">

			

				<div class="container">
		

						<!-- Your site title as branding in the menu -->
						<div class="site-logo-img">
							<a href="#" class="custom-logo-link" rel="home" aria-current="page">
								<img src="" class="custom-logo" alt="<?php bloginfo( 'name' ); ?>" >
							</a>
						</div>
						<!-- end custom logo -->

					

					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => 'beco-main-menu',
							'container_id'    => 'main-header-navigation',
							'menu_class'      => 'nav_desktop',
							'fallback_cb'     => '',
							'menu_id'         => 'main-menu-principal',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
			
				</div><!-- .container -->
				

			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->
	</header><!-- #header-main-layout -->
