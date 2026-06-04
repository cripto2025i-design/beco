<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
        
        
		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/dist/css/style.min.css' );
        wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/css/fontawesome-all.min.css', array() );
		wp_enqueue_style( 'output', get_template_directory_uri() . '/css/output.css', array() );
		wp_enqueue_style( 'understrap-theme', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'understrap-styles', get_template_directory_uri() . '/dist/css/style.min.css', array(), $css_version );
        wp_enqueue_style( 'theme-plugins', get_template_directory_uri() . '/css/plugins.css' );
		wp_enqueue_style( 'theme-styles', get_template_directory_uri() . '/style.css', array(), $css_version );

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'understrap-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
        wp_enqueue_script( 'plugins-scripts', get_template_directory_uri() . '/js/jquery-plugin-collection.js', array(), $js_version, true );
        wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.js', array(), $js_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );
