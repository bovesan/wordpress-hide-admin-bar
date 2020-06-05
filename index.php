<?php
/**
 * Plugin Name:       Hide admin bar
 * Plugin URI:        https://github.com/bovesan/wordpress-hide-admin-bar
 * Description:       Hides the admin bar for non-admin users
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Author:            Bengt Ove Sannes
 * Author URI:        https://bovesan.com/
 */

add_action('after_setup_theme', 'bovesan_remove_admin_bar');
 
function bovesan_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
}
