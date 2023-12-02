<?php

class AddCustomizer
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections($wp_customize)
    {
        /*
        * Add settings to sections.
        */
        $this->banner_section($wp_customize);
        $this->jewellery_store_section($wp_customize);
       $this->featured_products_section($wp_customize);
       $this->special_offer_section($wp_customize);
       $this->discount_section($wp_customize);
       $this->ad_featured_new_products_section_section($wp_customize);
       $this->posts_section($wp_customize);
    }

    /* Sanitize Inputs */
    public function sanitize_custom_text($input)
    {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }

    public function sanitize_custom_url($input)
    {
        return filter_var($input, FILTER_SANITIZE_URL);
    }

    /* Banner Section */
    private function banner_section($wp_customize)
    {
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
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner-section-callout-image-control', array(
            'label' => 'Image',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-image',

        )));

        $wp_customize->add_setting('banner-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-1', array(
            'label' => 'Section 1 Text block 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('banner-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-2', array(
            'label' => 'Section 1 Text block 2',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('banner-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
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
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-4', array(
            'label' => 'Section 1 Text on button 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-1-text',
            'type' => 'text'
        )));

        // link on button 1
        $wp_customize->add_setting('banner-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-5', array(
            'label' => 'Section 1 Link on button 1',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-1-link',
            'type' => 'text'
        )));

        // text on button 2
        $wp_customize->add_setting('banner-section-callout-button-2-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-6', array(
            'label' => 'Section 1 Text on button 2',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-2-text',
            'type' => 'text'
        )));

        // link on button 2
        $wp_customize->add_setting('banner-section-callout-button-2-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'banner-section-callout-control-7', array(
            'label' => 'Section 1 Link on button 2',
            'section' => 'banner-section',
            'settings' => 'banner-section-callout-button-2-link',
            'type' => 'text'
        )));

    }

//JEWELLERY STORE
    private function jewellery_store_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('jewellery-store-section', array(
            'title' => 'JEWELLERY STORE',
            'priority' => 3,
            'description' => __('Add Content in JEWELLERY STORE', 'testtask'),
        ));

        $wp_customize->add_setting('jewellery-store-section-callout-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'jewellery-store-section-callout-image-control', array(
            'label' => 'Image',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-image',
        )));

        $wp_customize->add_setting('jewellery-store-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-1', array(
            'label' => 'Text block 1',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('jewellery-store-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-2', array(
            'label' => 'Text block 2',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('jewellery-store-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-3', array(
            'label' => 'Text block 3',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-text-block3',
            'type' => 'text'
        )));

        // text block 4
        $wp_customize->add_setting('jewellery-store-section-callout-text-block4', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-4', array(
            'label' => 'Text block 4',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-text-block4',
            'type' => 'textarea'
        )));

        // text on button 1
        $wp_customize->add_setting('jewellery-store-section-callout-button-1-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-5', array(
            'label' => 'Text on button 1',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-button-1-text',
            'type' => 'text'
        )));

        // link on button 1
        $wp_customize->add_setting('jewellery-store-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-6', array(
            'label' => 'Link on button 1',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-button-1-link',
            'type' => 'text'
        )));

        // text on button 2
        $wp_customize->add_setting('jewellery-store-section-callout-button-2-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-7', array(
            'label' => 'Text on button 2',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-button-2-text',
            'type' => 'text'
        )));

        // link on button 2
        $wp_customize->add_setting('jewellery-store-section-callout-button-2-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'jewellery-store-section-callout-control-8', array(
            'label' => 'Link on button 2',
            'section' => 'jewellery-store-section',
            'settings' => 'jewellery-store-section-callout-button-2-link',
            'type' => 'text'
        )));

    }

    //FEATURED PRODUCTS
    private function featured_products_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('featured-products-section', array(
            'title' => 'FEATURED PRODUCTS',
            'priority' => 3,
            'description' => __('Add Content in FEATURED PRODUCTS', 'testtask'),
        ));


        $wp_customize->add_setting('featured-products-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-1', array(
            'label' => 'Text block 1',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('featured-products-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-2', array(
            'label' => 'Text block 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('featured-products-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-3', array(
            'label' => 'Text block 3',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-block3',
            'type' => 'text'
        )));

        // row 1
        //image 1
        $wp_customize->add_setting('featured-products-section-callout-image1', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'featured-products-section-callout-image-control-1', array(
            'label' => 'Image row 1',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-image1',
        )));

        // text on image 1
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-1', array(
            'label' => 'Text on image 1',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-1',
            'type' => 'text'
        )));

        // text on image 2
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-2', array(
            'label' => 'Text on image 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-2',
            'type' => 'text'
        )));

        // text on image 3
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-3', array(
            'label' => 'Text on image 3',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-3',
            'type' => 'text'
        )));

        // category-slug
        $wp_customize->add_setting('featured-products-section-callout-category-slug-1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-category-slug-1', array(
            'label' => 'Category slug',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-category-slug-1',
            'type' => 'text'
        )));

        // category-quantity
        $wp_customize->add_setting('featured-products-section-callout-category-quantity-1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-category-quantity-1', array(
            'label' => 'Product in carousel',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-category-quantity-1',
            'type' => 'text'
        )));


        // row 2
        //image 2
        $wp_customize->add_setting('featured-products-section-callout-image2', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'featured-products-section-callout-image-control-2', array(
            'label' => 'Image row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-image2',
        )));

        // text on image 1
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-1-row-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-1-row-2', array(
            'label' => 'Text on image 1 row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-1-row-2',
            'type' => 'text'
        )));

        // text on image 2
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-2-row-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-2-row-2', array(
            'label' => 'Text on image 2 row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-2-row-2',
            'type' => 'text'
        )));

        // text on image 3
        $wp_customize->add_setting('featured-products-section-callout-text-on-image-3-row-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-text-on-image-3-row-2', array(
            'label' => 'Text on image 3 row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-text-on-image-3-row-2',
            'type' => 'text'
        )));

        // category-slug
        $wp_customize->add_setting('featured-products-section-callout-category-slug-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-category-slug-2', array(
            'label' => 'Category slug row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-category-slug-2',
            'type' => 'text'
        )));

        // category-quantity
        $wp_customize->add_setting('featured-products-section-callout-category-quantity-2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'featured-products-section-callout-control-category-quantity-2', array(
            'label' => 'Product in carousel row 2',
            'section' => 'featured-products-section',
            'settings' => 'featured-products-section-callout-category-quantity-2',
            'type' => 'text'
        )));
    }

 // Special offer
    private function special_offer_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('special-offer-section', array(
            'title' => 'Special offer',
            'priority' => 4,
            'description' => __('Add Content in Special offer', 'testtask'),
        ));

        // link on video
        $wp_customize->add_setting('special-offer-section-callout-video-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-1', array(
            'label' => 'Link on button 2',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-video-link',
            'type' => 'text'
        )));

        $wp_customize->add_setting('special-offer-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-2', array(
            'label' => 'Text block 1',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('special-offer-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-3', array(
            'label' => 'Text block 2',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('special-offer-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-4', array(
            'label' => 'Text block 3',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-text-block3',
            'type' => 'text'
        )));

        // text on button 1
        $wp_customize->add_setting('special-offer-section-callout-button-1-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-5', array(
            'label' => 'Text on button 1',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-button-1-text',
            'type' => 'text'
        )));

        // link on button 1
        $wp_customize->add_setting('special-offer-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'special-offer-section-callout-control-6', array(
            'label' => 'Link on button 1',
            'section' => 'special-offer-section',
            'settings' => 'special-offer-section-callout-button-1-link',
            'type' => 'text'
        )));
    }

    //DISCOUNT
    private function discount_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('discount-section', array(
            'title' => 'DISCOUNT',
            'priority' => 5,
            'description' => __('Add Content in DISCOUNT', 'testtask'),
        ));

        $wp_customize->add_setting('discount-section-callout-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'discount-section-callout-image-control', array(
            'label' => 'Image',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-image',
        )));



        $wp_customize->add_setting('discount-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-1', array(
            'label' => 'Text block 1',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('discount-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-2', array(
            'label' => 'Text block 2',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('discount-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-3', array(
            'label' => 'Text block 3',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-text-block3',
            'type' => 'text'
        )));

        // text block 4
        $wp_customize->add_setting('discount-section-callout-text-block4', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-4', array(
            'label' => 'Text block 4',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-text-block4',
            'type' => 'textarea'
        )));


        // list item 1
        $wp_customize->add_setting('discount-section-callout-list-item1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-9', array(
            'label' => 'List item 1',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-list-item1',
            'type' => 'text'
        )));

        // list item 2
        $wp_customize->add_setting('discount-section-callout-list-item2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-10', array(
            'label' => 'List item 2',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-list-item2',
            'type' => 'text'
        )));

        // list item 3
        $wp_customize->add_setting('discount-section-callout-list-item3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-11', array(
            'label' => 'List item 3',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-list-item3',
            'type' => 'text'
        )));

        // list item 4
        $wp_customize->add_setting('discount-section-callout-list-item4', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-12', array(
            'label' => 'List item 4',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-list-item4',
            'type' => 'text'
        )));

        // text on button 1
        $wp_customize->add_setting('discount-section-callout-button-1-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-5', array(
            'label' => 'Text on button 1',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-button-1-text',
            'type' => 'text'
        )));

        // link on button 1
        $wp_customize->add_setting('discount-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-6', array(
            'label' => 'Link on button 1',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-button-1-link',
            'type' => 'text'
        )));

        // text on button 2
        $wp_customize->add_setting('discount-section-callout-button-2-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-7', array(
            'label' => 'Text on button 2',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-button-2-text',
            'type' => 'text'
        )));

        // link on button 2
        $wp_customize->add_setting('discount-section-callout-button-2-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'discount-section-callout-control-8', array(
            'label' => 'Link on button 2',
            'section' => 'discount-section',
            'settings' => 'discount-section-callout-button-2-link',
            'type' => 'text'
        )));

    }

    //Ad + FEATURED PRODUCTS + NEW PRODUCTS

    private function ad_featured_new_products_section_section($wp_customize)
    {
        // New panel for "Layout".
        $wp_customize->add_section('ad-featured-new-products-section', array(
            'title' => 'Ad + FEATURED PRODUCTS + NEW PRODUCTS',
            'priority' => 6,
            'description' => __('Add Content in Ad + FEATURED PRODUCTS + NEW PRODUCTS', 'testtask'),
        ));

        //image
        $wp_customize->add_setting('ad-featured-new-products-section-callout-image1', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ad-featured-new-products-section-callout-image-control-1', array(
            'label' => 'Image row 1',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-image1',
        )));


        $wp_customize->add_setting('ad-featured-new-products-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ad-featured-new-products-section-callout-control-1', array(
            'label' => 'Text block 1',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('ad-featured-new-products-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ad-featured-new-products-section-callout-control-2', array(
            'label' => 'Text block 2',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('ad-featured-new-products-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ad-featured-new-products-section-callout-control-3', array(
            'label' => 'Text block 3',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-text-block3',
            'type' => 'text'
        )));

        // text on button 1
        $wp_customize->add_setting('ad-featured-new-products-section-callout-button-1-text', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ad-featured-new-products-section-callout-control-5', array(
            'label' => 'Text on button 1',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-button-1-text',
            'type' => 'text'
        )));

        // link on button 1
        $wp_customize->add_setting('ad-featured-new-products-section-callout-button-1-link', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ad-featured-new-products-section-callout-control-6', array(
            'label' => 'Link on button 1',
            'section' => 'ad-featured-new-products-section',
            'settings' => 'ad-featured-new-products-section-callout-button-1-link',
            'type' => 'text'
        )));
    }

    // posts section
    private function posts_section($wp_customize) {
        // New panel for "Layout".
        $wp_customize->add_section('posts-section', array(
            'title' => 'Blog',
            'priority' => 7,
            'description' => __('Add Content in Blog', 'testtask'),
        ));


        $wp_customize->add_setting('posts-section-callout-text-block1', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'posts-section-callout-control-1', array(
            'label' => 'Text block 1',
            'section' => 'posts-section',
            'settings' => 'posts-section-callout-text-block1',
            'type' => 'text'
        )));

        // text block 2
        $wp_customize->add_setting('posts-section-callout-text-block2', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'posts-section-callout-control-2', array(
            'label' => 'Text block 2',
            'section' => 'posts-section',
            'settings' => 'posts-section-callout-text-block2',
            'type' => 'text'
        )));

        // text block 3
        $wp_customize->add_setting('posts-section-callout-text-block3', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'posts-section-callout-control-3', array(
            'label' => 'Text block 3',
            'section' => 'posts-section',
            'settings' => 'posts-section-callout-text-block3',
            'type' => 'text'
        )));

        // category-quantity
        $wp_customize->add_setting('posts-section-callout-posts-quantity', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'posts-section-callout-control-posts-quantity', array(
            'label' => 'Posts in carousel',
            'section' => 'posts-section',
            'settings' => 'posts-section-callout-posts-quantity',
            'type' => 'text'
        )));
    }
}