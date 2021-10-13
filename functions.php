<?php

/**
 * Proweb365 functions and definitions
 *
 * @package Proweb365
 */
require get_template_directory() . '/inc/init.php';

add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}