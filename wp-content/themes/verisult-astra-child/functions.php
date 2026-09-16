<?php
/**
 * Verisult Astra Child theme functions.
 *
 * @package Verisult_Astra_Child
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Load child-theme frontend assets.
 *
 * @return void
 */
function verisult_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$css_path      = get_stylesheet_directory() . '/assets/css/custom.css';
	$js_path       = get_stylesheet_directory() . '/assets/js/main.js';

	wp_enqueue_style(
		'verisult-child-style',
		get_stylesheet_uri(),
		array( 'astra-theme-css' ),
		$theme_version
	);

	wp_enqueue_style(
		'verisult-custom-style',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array( 'verisult-child-style' ),
		file_exists( $css_path ) ? (string) filemtime( $css_path ) : $theme_version
	);

	wp_enqueue_script(
		'verisult-main-script',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		file_exists( $js_path ) ? (string) filemtime( $js_path ) : $theme_version,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'verisult_enqueue_assets' );

