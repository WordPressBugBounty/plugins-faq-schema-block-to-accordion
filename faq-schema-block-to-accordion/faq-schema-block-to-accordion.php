<?php
/*
Plugin Name: Turn Yoast SEO FAQ Block to Accordion
Description: A plugin to turn Yoast SEO FAQ blocks into accordion easily.
Author: WPHowKnow
Author URI: https://wphowknow.com/
Version: 1.0.6
Text Domain: faq-schema-block-to-accordion
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

define( 'YSFA_Plugin_DIR', rtrim( plugin_dir_path( __FILE__ ), '/' ) );
define( 'YSFA_Plugin_URL', rtrim( plugin_dir_url( __FILE__ ), '/' ) );
define( 'YSFA_CURRENT_VERSION', '1.0.5' );

// Load Asset Files
function YSFA_plugin_asset_files() {
    wp_enqueue_style( 'YSFA', YSFA_Plugin_URL . '/assets/css/style.min.css', array(), YSFA_CURRENT_VERSION );
    wp_enqueue_script( 'YSFA-js', YSFA_Plugin_URL . '/assets/js/YSFA-JS.min.js', array('jquery'), YSFA_CURRENT_VERSION, 'true' );
}
add_action( 'wp_enqueue_scripts', 'YSFA_plugin_asset_files' );