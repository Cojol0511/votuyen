<?php
/**
 * Theme Panel
 */
require get_template_directory() . '/inc/admin/panel/panel.php';
// Add Advanced Options
if (!is_customize_preview()  && is_admin() ) {
  require get_template_directory() . '/inc/admin/advanced/index.php';
}