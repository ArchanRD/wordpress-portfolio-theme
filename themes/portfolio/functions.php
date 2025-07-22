<?php

/**
 * Theme functions and definitions.
 *
 * This file is responsible for loading the theme's custom functionalities,
 * styles, and scripts.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Portfolio
 * @since 1.0.0
 */

/**
 * Enqueues the main stylesheet for the portfolio theme.
 */
function enqueue_portofolio_styles()
{
    wp_enqueue_style('portfolio-style', get_stylesheet_uri());
}

/**
 * Registers the theme customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_register($wp_customize)
{
    /**
     * Hero customizer
     */
    $wp_customize->add_section('portfolio_hero_section', [
        'title' => 'Hero Section',
        'description' => 'Hero description',
        'priority' => 30
    ]);

    $wp_customize->add_setting('portfolio_hero_text', [
        'default' => 'Portfolio',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_hero_text', [
        'label' => 'hero text',
        'section' => 'portfolio_hero_section',
        'type' => 'text'
    ]);

    /**
     * Primary Button Text Setting
     * 
     * Controls the text displayed on the primary call-to-action button.
     * This is typically the main action you want visitors to take.
     */
    $wp_customize->add_setting('portfolio_hero_button1', [
        'default' => 'Let\'s Talk',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_hero_button1', [
        'label' => 'Button 1 Text',
        'section' => 'portfolio_hero_section',
        'type' => 'url'
    ]);

    /**
     * Primary Button URL Setting
     * 
     * Controls the destination URL when the primary button is clicked.
     * Default is '#' which links to the same page (no navigation).
     */
    $wp_customize->add_setting('portfolio_hero_button1_url', [
        'default' => '#',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_hero_button1_url', [
        'label' => 'Button 1 URL',
        'section' => 'portfolio_hero_section',
        'type' => 'url'
    ]);

    /**
     * Secondary Button Text Setting
     * 
     * Controls the text displayed on the secondary call-to-action button.
     * This is typically used for alternative actions like viewing services.
     */
    $wp_customize->add_setting('portfolio_hero_button2', [
        'default' => 'My services',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_hero_button2', [
        'label' => 'Button 2 Text',
        'section' => 'portfolio_hero_section',
        'type' => 'text'
    ]);

    /**
     * Secondary Button URL Setting
     * 
     * Controls the destination URL when the secondary button is clicked.
     * Default is '#' which links to the same page (no navigation).
     */
    $wp_customize->add_setting('portfolio_hero_button2_url', [
        'default' => '#',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_hero_button2_url', [
        'label' => 'Add url for button 2',
        'section' => 'portfolio_hero_section',
        'type' => 'text'
    ]);

    /**
     * Hero Image Setting
     * 
     * Allows users to upload or select an image for the hero section.
     * This could be a background image or a featured image alongside the text.
     */
    $wp_customize->add_setting('portfolio_hero_image', [
        'transport' => 'refresh',    // Refresh the page to see changes
        'sanitize_callback' => 'esc_url_raw' // Sanitize as URL for security
    ]);
    
    // Using the WordPress image control for media library integration
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_hero_image', [
        'label' => 'Image',
        'section' => 'portfolio_hero_section',
        'settings' => 'portfolio_hero_image'
    ]));
}

register_nav_menus(
    array('primary-menu' => 'primary menu')
);

add_action('wp_enqueue_scripts', 'enqueue_portofolio_styles');
add_action('customize_register', 'portfolio_customizer_register');