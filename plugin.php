<?php
/*
Plugin Name: The Walker Group Theme Setup
Plugin URI:
Description: Short order template drop-in setup
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace WSS\Setup;

/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

define( 'WALKER_THEME_SETUP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WALKER_THEME_SETUP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

$wss_branding = new \WSS\Setup\Branding();

$wss_init = new \WSS\Setup\Init();

$wss_acf = new \WSS\Setup\ACF();

$wss_metaboxes = new \WSS\Setup\Metaboxes();
