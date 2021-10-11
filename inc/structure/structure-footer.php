<?php
/* Custom footer scripts */
function wp_footer_scripts(){
  echo do_shortcode(get_theme_mod('html_scripts_footer'));
}
add_action('wp_footer', 'wp_footer_scripts');