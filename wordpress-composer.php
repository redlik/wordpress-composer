<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress Composer Plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       Wordpress composer plugin with autoload.
 * Version:           1.0.0
 * Author:            Rafo
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-composer
 * Domain Path:       /languages
 */

use ComposerPlugin\Front\Header;

require_once(plugin_dir_path(__FILE__) . '/vendor/autoload.php');

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

add_action('wp_head', 'showMessage');

function showMessage()
{
    $message = New Header();
    $message->showMessage();
}
