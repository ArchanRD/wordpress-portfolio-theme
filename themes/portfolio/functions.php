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
function enqueue_portofolio_styles () {
    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
}

/**
 * Registers the theme customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_register ( $wp_customize) {
    $wp_customize->add_section( 'portfolio_hero_section', [
        'title' => 'Hero Section',
        'description' => 'Hero description',
        'priority' => 30
    ]);

    // Hero text
    $wp_customize->add_setting( 'portfolio_hero_text', [
        'default' => 'Portfolio',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control( 'portfolio_hero_text', [
        'label' => 'hero text',
        'section' => 'portfolio_hero_section',
        'type' => 'text'
    ]);

    // Desc
    $wp_customize->add_setting( 'portfolio_hero_desc', [
        'default' => 'This is a desc',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control( 'portfolio_hero_desc', [
        'label' => 'Short description',
        'section' => 'portfolio_hero_section',
        'type' => 'textarea'
    ]);

    // Image
    $wp_customize->add_setting( 'portfolio_hero_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'portfolio_hero_image', [
        'label' => 'Image',
        'section' => 'portfolio_hero_section',
        'settings' => 'portfolio_hero_image'
    ]));
}

add_action( 'wp_enqueue_scripts', 'enqueue_portofolio_styles' );
add_action( 'customize_register', 'portfolio_customizer_register' );