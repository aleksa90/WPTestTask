<?php
class AddCustomizer
{

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
    }
    public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->banner_section( $wp_customize );
    }

    /* Sanitize Inputs */
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }


    /* Banner Section */
    private function banner_section( $wp_customize ) {
        // New panel for "Layout".
        $wp_customize->add_section('banner-section', array(
            'title' => 'Block - 1',
            'priority' => 2,
            'description' => __('Add Content in Block 1', 'testtask'),
        ));

        $wp_customize->add_setting('banner-section-callout-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner-section-callout-image-control', array(
            'label' => 'Image',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-image',

        )));

        $wp_customize->add_setting('banner-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-1', array(
            'label' => 'Section 1 Text block 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-text-block1',
            'type' => 'textarea'
        )));

        // text block 2
        $wp_customize->add_setting('banner-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-2', array(
            'label' => 'Section 1 Text block 2',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-text-block2',
            'type' => 'textarea'
        )));

        // text block 3
        $wp_customize->add_setting('banner-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-3', array(
            'label' => 'Section 1 Text block 3',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-text-block3',
            'type' => 'textarea'
        )));

        // text on button 1
        $wp_customize->add_setting('banner-section-callout-button-1-text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-4', array(
            'label' => 'Section 1 Text on button 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-1-text',
            'type' => 'textarea'
        )));


        // link on button 1
        $wp_customize->add_setting('banner-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-5', array(
            'label' => 'Section 1 Link on button 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-1-link',
            'type' => 'textarea'
        )));


    }}