<?php

/**
 * Plugin Name: Custom WP Login
 * Version: 0.1
 * Author: Tom H
 * License: GPL2+
 * Text Domain: cwpl
 */

add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );
/**
 * Load custom stylesheet on login page.
 */
function cwpl_login_stylesheet() {
    wp_enqueue_style( 'cwp-custom-stylesheet', plugin_dir_url(__FILE__) . 'login-styles.css' );
}

add_filter( 'login_errors', 'cwpl_error_message' );
/**
 * Returns a custom login error message.
 */
function cwpl_error_message( ) {
    return 'Well, that was not it!';
}

/**
 * Remove shake animation from login error.
 */
add_action( 'login_head', 'cwpl_remove_shake' );
function cwpl_remove_shake() {
    remove_action( 'login_head', 'wp_shake_js', 12 );
}
