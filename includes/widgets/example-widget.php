<?php
namespace My_Elementor_Widgets\Includes\Widgets;

use Elementor\Widget_Base;

if ( ! defined( 'ABSPATH' ) ) exit;

class Example_Widget extends Widget_Base {

    public function get_name() {
        return 'example_widget';
    }

    public function get_title() {
        return __( 'Eleo Widget', 'eleo-addon' );
    }

    public function get_icon() {
        return 'eicon-code';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    protected function register_controls() {
        
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'eleo-addon' ),
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'image',
            [
                'label' => __( 'Choose Image', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Hello World!', 'eleo-addon' ),
                'placeholder' => __( 'Enter your title', 'eleo-addon' ),
            ]
        );



        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'This is a description text.', 'eleo-addon' ),
                'placeholder' => __( 'Enter description', 'eleo-addon' ),
            ]
        );

        $this->add_control(
            'number_value',
            [
                'label' => __( 'Number Value', 'eleo-addon' ),
                'type'  => \Elementor\Controls_Manager::NUMBER,
                'default' => 10,
            ]
        );

        $this->add_control(
            'select_style',
            [
                'label' => __( 'Select Style', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'style1' => __( 'Style One', 'eleo-addon' ),
                    'style2' => __( 'Style Two', 'eleo-addon' ),
                ],
                'default' => 'style1',
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __( 'Choose Icon', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

         $this->add_control(
            'show_description',
            [
                'label' => __( 'Show Description', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'title_size',
            [
                'label' => __( 'Title Size', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'h1' => 'H1',
                    'h2' => 'H2',
                    'h3' => 'H3',
                ],
                'default' => 'h2',
            ]
         );

        $this->add_control(
            'alignment',
            [
                'label' => __( 'Alignment', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'eleo-addon' ),
                        'icon'  => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'eleo-addon' ),
                        'icon'  => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'eleo-addon' ),
                        'icon'  => 'eicon-text-align-right',
                    ],
                ],
                'toggle' => true,
                'default' => 'left',
            ]
        );




        $this->end_controls_section();



        // Style Section
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'eleo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .my-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'selector' => '{{WRAPPER}} .my-title',
            ]
        );

        

        $this->add_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 50,
                        'max' => 500,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .my-icon' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

         $this->add_control(
            'description_color',
            [
                'label' => __( 'Description Color', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .my-description' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'description_typo',
                'selector' => '{{WRAPPER}} .my-description',
            ]
        );

        $this->end_controls_section();



        // Style Section
        $this->start_controls_section(
            'img_style_section',
            [
                'label' => __( 'Image', 'eleo-addon' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Alignment Control
        $this->add_responsive_control(
            'image_align',
            [
                'label' => __( 'Alignment', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'eleo-addon' ),
                        'icon' => 'eicon-text-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'eleo-addon' ),
                        'icon' => 'eicon-text-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'eleo-addon' ),
                        'icon' => 'eicon-text-align-right',
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .my-image-wrap' => 'text-align: {{VALUE}};',
                ],
                'default' => 'center',
            ]
        );

        // Width
        $this->add_responsive_control(
            'image_width',
            [
                'label' => __( 'Width', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'vw' ],
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Max Width
        $this->add_responsive_control(
            'image_max_width',
            [
                'label' => __( 'Max Width', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'vw' ],
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'max-width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Height
        $this->add_responsive_control(
            'image_height',
            [
                'label' => __( 'Height', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', 'em', 'rem', 'vh' ],
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        // Object Fit
        $this->add_control(
            'object_fit',
            [
                'label' => __( 'Object Fit', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    '' => __( 'Default', 'eleo-addon' ),
                    'fill' => __( 'Fill', 'eleo-addon' ),
                    'cover' => __( 'Cover', 'eleo-addon' ),
                    'contain' => __( 'Contain', 'eleo-addon' ),
                ],
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'object-fit: {{VALUE}};',
                ],
                'condition' => [
                    'image_height[size]!' => '',
                ],
            ]
        );

        /// --- START TABS --- ///
        $this->start_controls_tabs( 'img_style_tabs' );

        // NORMAL TAB
        $this->start_controls_tab(
            'image_style_normal_tab',
            [ 'label' => __( 'Normal', 'eleo-addon' ) ]
        );

        // Border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border',
                'selector' => '{{WRAPPER}} .my-image',
            ]
        );

        // Border Radius
        $this->add_responsive_control(
            'image_border_radius',
            [
                'label' => __( 'Border Radius', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        // Box Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_box_shadow',
                'selector' => '{{WRAPPER}} .my-image',
            ]
        );

        // Opacity
        $this->add_control(
            'image_opacity',
            [
                'label' => __( 'Opacity', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .my-image' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        $this->end_controls_tab();


        // HOVER TAB
        $this->start_controls_tab(
            'image_style_hover_tab',
            [ 'label' => __( 'Hover', 'eleo-addon' ) ]
        );

        // Hover Border
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'image_border_hover',
                'selector' => '{{WRAPPER}} .my-image:hover',
            ]
        );

        // Hover Shadow
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'image_hover_box_shadow',
                'selector' => '{{WRAPPER}} .my-image:hover',
            ]
        );

        // Hover Opacity
        $this->add_control(
            'image_hover_opacity',
            [
                'label' => __( 'Opacity', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .my-image:hover' => 'opacity: {{SIZE}};',
                ],
            ]
        );

        // Hover Animation
        $this->add_control(
            'image_hover_animation',
            [
                'label' => __( 'Hover Animation', 'eleo-addon' ),
                'type' => \Elementor\Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->end_controls_tab();
        $this->end_controls_tabs(); // END Tabs

        $this->end_controls_section();


 }

    protected function render() {
        
        $settings = $this->get_settings_for_display();

        $tag = $settings['title_size'];

        $show_description = $settings['show_description'];

        echo '<div style="text-align:' . esc_attr( $settings['alignment'] ) . ';">';

         if ( ! empty( $settings['image']['url'] ) ) {
            echo '<div class="my-image-wrap">';

            echo '<img class="my-image" src="' . esc_url( $settings['image']['url'] ) . '" alt="Image">';

            echo '</div>';
        }

        echo sprintf( '<%1$s class="my-title">%2$s</%1$s>', esc_attr( $tag ), esc_html( $settings['title'] ) );

         if ( ! empty( $settings['icon']['value'] ) ) {
        \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true', 'class' => 'my-icon' ] );
    }

        if ( 'yes' === $show_description ) {
        echo '<p class="my-description">' . esc_html( $settings['description'] ) . '</p>';
        }

        echo '<p>Number: ' . esc_html( $settings['number_value'] ) . '</p>';

        echo '<p>Selected Style: ' . esc_html( $settings['select_style'] ) . '</p>';

        echo '</div>';

            }
}



