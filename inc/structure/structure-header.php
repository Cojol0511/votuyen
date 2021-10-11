<?php
/**
 * Add Favicon Icon
 *
 * @return void
 */
function add_favicon() {
	echo '<link rel="shortcut icon" type="image/png" href="'.get_theme_mod('html_favicon_icon').'" />';
}
add_action('wp_head', 'add_favicon');
/**
 * Insert custom header script.
 *
 * @return void
 */
function wp_custom_header_js() {
	if ( get_theme_mod( 'html_scripts_header' ) && ! is_admin() ) {
		echo get_theme_mod( 'html_scripts_header' );
	}
}
add_action( 'wp_head', 'wp_custom_header_js' );

/**
 * Insert custom body top script.
 *
 * @return void
 */
function wp_after_body_open() {
	if ( get_theme_mod( 'html_scripts_after_body' ) && ! is_admin() ) {
		echo get_theme_mod( 'html_scripts_after_body' );
	}
}
add_action( 'wp_after_body_open', 'wp_after_body_open' );