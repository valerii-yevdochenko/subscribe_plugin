<?php

/**
 * Subscribe form and list of subscribers.
 *
 * Plugin Name:         Subscribe
 * Description:         The plugin creates a subscribe form and store subscribers into database.
 * Version:             1.0.0
 * Requires at least:   4.9
 * Requires PHP:        5.5
 * Author:              wppunk
 * License:             MIT
 * Text Domain:         subscribe
 *
 * @package     Subscribe
 */

namespace Subscribe;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SUBSCRIBE_VERSION', '1.0.0' );
define( 'SUBSCRIBE_PATH', plugin_dir_path( __FILE__ ) );
define( 'SUBSCRIBE_URL', plugin_dir_url( __FILE__ ) );

require_once( SUBSCRIBE_PATH . 'Database.php' );
require_once( SUBSCRIBE_PATH . 'Shortcode.php' );
require_once( SUBSCRIBE_PATH . 'Frontend.php' );
require_once( SUBSCRIBE_PATH . 'SubscribeRepository.php' );
require_once( SUBSCRIBE_PATH . 'AjaxSubscribe.php' );

register_activation_hook( __FILE__, [ 'Database', 'create_table' ] );
