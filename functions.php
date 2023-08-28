<?php
/**
 * Theme functions and definitions
 *
 * @package POSEIDON_THEME
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined('POSEIDON_THEME_VERSION') ) {
	define( 'POSEIDON_THEME_VERSION', '1.0.0' );
}
if ( ! defined('POSEIDON_TEXTDOMAIN') ) {
	define( 'POSEIDON_TEXTDOMAIN', 'poseidon' );
}

if ( ! defined('POSEIDON_THEME_URI') ) {
	define( 'POSEIDON_THEME_URI', get_stylesheet_directory_uri() );
}

if ( ! defined('POSEIDON_THEME_DIR') ) {
	define( 'POSEIDON_THEME_DIR', get_stylesheet_directory() );
}

if ( ! defined('POSEIDON_THEME_INC_DIR') ) {
	define( 'POSEIDON_THEME_INC_DIR', POSEIDON_THEME_DIR . '/includes' );
}


// General functions
require_once POSEIDON_THEME_INC_DIR . '/general-functions.php';

// Theme setup and script/style enqueue
require_once POSEIDON_THEME_INC_DIR . '/theme.php';

// WP actions/filters
require_once POSEIDON_THEME_INC_DIR . '/wp-hooks.php';

// Functions/Hooks related to ACF
require_once POSEIDON_THEME_INC_DIR . '/acf.php';

// AJAX functions
require_once POSEIDON_THEME_INC_DIR . '/ajax.php';

// Gravity Forms Hooks
require_once POSEIDON_THEME_INC_DIR . '/gform.php';

// Contains all the shortcodes
require_once POSEIDON_THEME_INC_DIR . '/shortcodes.php';
