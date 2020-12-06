<?php
/**
 * Plugin Name:       Bottom Admin Toolbar
 * Plugin URI:        https://wordpress.org/plugins/bottom-admin-toolbar/
 * Description:       Change your admin toolbar position to the bottom !
 * Version:           1.2
 * Tags:              admin, bar, adminbar, bottom bar, toolbar, wordpress, bottom
 * Requires at least: 3.0 or higher
 * Requires PHP:      5.6
 * Tested up to:      5.5
 * Stable tag:        1.2
 * Author:            Michael Revellin-Clerc
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Contributors:      Michael Revellin-Clerc
 * Donate link:       https://ko-fi.com/devloper
 */

add_action('init', 'bottom_admin_toolbar_activated');
function bottom_admin_toolbar_activated()
{
    // Path of current plugin
    $plugin_path = plugin_basename(__FILE__);

    // Execute only if plugin is activated
    if (in_array($plugin_path, apply_filters('active_plugins', get_option('active_plugins')))) {

        // Add admin-bar support if not already activated
        add_theme_support('admin-bar', array('callback' => '__return_false'));

        // Enqueue custom files
        add_action('wp_enqueue_scripts', 'bottom_admin_toolbar_enqueue_custom_files');
        function bottom_admin_toolbar_enqueue_custom_files()
        {
            // Only loggedin-user
            if (is_user_logged_in()):
                wp_enqueue_style('toolbar-css', plugin_dir_url(__FILE__).'assets/toolbar.css');
                wp_enqueue_script('toolbar-js', plugin_dir_url(__FILE__).'assets/toolbar.js', array('jquery'));
            endif;
        }
    }
}
