<?php
namespace My_Elementor_Widgets\Includes;

if ( ! defined( 'ABSPATH' ) ) exit;

class Widget_Loader {

    public function init() {
        add_action( 'elementor/widgets/register', [ $this, 'register_widgets' ] );
    }

    public function register_widgets( $widgets_manager ) {

        require_once MYEW_PATH . 'includes/widgets/example-widget.php';
        require_once MYEW_PATH . 'includes/widgets/repeater-widget.php';

        $widgets_manager->register( new \My_Elementor_Widgets\Includes\Widgets\Example_Widget() );
        $widgets_manager->register( new \My_Elementor_Widgets\Includes\Widgets\Repeater_Widget() );
    }
}
