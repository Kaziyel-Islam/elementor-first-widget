<?php
namespace My_Elementor_Widgets\Includes;

if ( ! defined( 'ABSPATH' ) ) exit;

use My_Elementor_Widgets\Includes\Widget_Loader;

class Plugin_Loader {

    public function __construct() {

        // Elementor loaded
        add_action( 'elementor/init', [ $this, 'init' ] );
    }

    public function init() {

        // Load widget loader
        require_once MYEW_PATH . 'includes/class-widget-loader.php';

        $widget_loader = new Widget_Loader();
        $widget_loader->init();
    }
}
