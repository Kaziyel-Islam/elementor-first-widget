<?php

namespace My_Elementor_Widgets;

if ( ! defined( 'ABSPATH' ) ) exit;

use My_Elementor_Widgets\Includes\Plugin_Loader;

class Plugin {

    private static $instance;

    public static function instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __construct() {

        // Define Constants
        $this->define_constants();

        // Load Files
        require_once MYEW_PATH . 'includes/class-plugin-loader.php';

        // Init Loader
        new Plugin_Loader();
    }

    private function define_constants() {
        define( 'MYEW_PATH', plugin_dir_path( __FILE__ ) );
        define( 'MYEW_URL', plugin_dir_url( __FILE__ ) );
    }
}
