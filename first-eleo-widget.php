<?php
/**
 * Plugin Name: Eleo Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Kaziyel Islam
 * Author URI:  www.kaziyel.com
 * Text Domain: eleo-addon
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

require_once __DIR__ . '/plugin.php';

My_Elementor_Widgets\Plugin::instance();

?>