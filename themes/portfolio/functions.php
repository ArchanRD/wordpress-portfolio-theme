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

use Kirki\Compatibility\Kirki;

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
 * This is the main customizer registration function that calls individual section setup functions.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_register($wp_customize)
{
    // Initialize Kirki configuration
    Kirki::add_config('portfolio', [
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod'
    ]);
    
    portfolio_customizer_hero_section($wp_customize);
    portfolio_customizer_projects_section($wp_customize);
    portfolio_customizer_experience_section($wp_customize);

}

/**
 * Registers the Hero section customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_hero_section($wp_customize)
{
    /** Hero section */
    $wp_customize->add_section('portfolio_hero_section', [
        'title' => 'Hero',
        'description' => 'Hero description',
        'priority' => 20
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
        'default' => "Let's Talk",
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
        'transport' => 'refresh',  // Refresh the page to see changes
        'sanitize_callback' => 'esc_url_raw'  // Sanitize as URL for security
    ]);

    // Using the WordPress image control for media library integration
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'portfolio_hero_image', [
        'label' => 'Image',
        'section' => 'portfolio_hero_section',
        'settings' => 'portfolio_hero_image'
    ]));
}

/**
 * Registers the Projects section customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_projects_section($wp_customize)
{
    /** Projects section */
    $wp_customize->add_section('portfolio_project_section', [
        'title' => 'Projects',
        'description' => 'Add the content for projects sections',
        'priority' => 30
    ]);

    /** Project heading */
    $wp_customize->add_setting('portfolio_project_heading', [
        'default' => '',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_project_heading', [
        'label' => 'Heading',
        'section' => 'portfolio_project_section',
        'type' => 'text'
    ]);

    /** Project subheading */
    $wp_customize->add_setting('portfolio_project_subheading', [
        'default' => '',
        'transport' => 'refresh',
    ]);

    $wp_customize->add_control('portfolio_project_subheading', [
        'label' => 'Subheading',
        'section' => 'portfolio_project_section',
        'type' => 'text'
    ]);

    /** Initialize Kirki configuration */
    Kirki::add_config('portfolio', [
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod'
    ]);

    /** Create repeatable card field using Kirki */
    Kirki::add_field('portfolio', [
        'type' => 'repeater',
        'label' => esc_html__('Projects', 'textdomain'),
        'section' => 'portfolio_project_section',
        'settings' => 'portfolio_project_cards',
        'priority' => 40,
        'row_label' => [
            'type' => 'field',
            'value' => esc_html__('Project', 'textdomain'),
            'field' => 'title'
        ],
        'fields' => [
            'tag' => [
                'type' => 'text',
                'label' => esc_html__('Tag', 'textdomain'),
                'default' => '',
            ],
            'title' => [
                'type' => 'text',
                'label' => esc_html__('Title', 'textdomain'),
                'default' => '',
            ],
            'description' => [
                'type' => 'textarea',
                'label' => esc_html__('Description', 'textdomain'),
                'default' => '',
            ],
        ]
    ]);
}

/**
 * Registers the Experience section customizer settings and controls.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function portfolio_customizer_experience_section($wp_customize)
{
    $wp_customize->add_section('portfolio_experience_section', [
        'title' => 'Experience',
        'description' => 'Add your work experience',
        'priority' => 50
    ]);

    // Heading
    $wp_customize->add_setting('portfolio_experience_heading', [
        'default' => '',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_experience_heading', [
         'label' => 'Heading',
         'section' => 'portfolio_experience_section',
         'type' => 'text'
    ]);


    // Job title
    $wp_customize->add_setting('portfolio_experience_jobtitle', [
        'default' => '',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_experience_jobtitle', [
        'label' => 'Job title',
        'section' => 'portfolio_experience_section',
        'type' => 'text'
   ]);

   // Job role
   $wp_customize->add_setting('portfolio_experience_jobrole', [
    'default' => '',
    'transport' => 'refresh'
    ]);

    $wp_customize->add_control('portfolio_experience_jobrole', [
        'label' => 'Job role',
        'section' => 'portfolio_experience_section',
        'type' => 'text'
    ]);

    /** Initialize Kirki configuration */
    Kirki::add_config('portfolio', [
        'capability' => 'edit_theme_options',
        'option_type' => 'theme_mod'
    ]);

    /** Create repeatable card field using Kirki */
    Kirki::add_field('portfolio', [
        'type' => 'repeater',
        'label' => esc_html__('Works', 'textdomain'),
        'section' => 'portfolio_experience_section',
        'settings' => 'portfolio_experience_works',
        'priority' => 50,
        'row_label' => [
            'type' => 'field',
            'value' => esc_html__('Work', 'textdomain'),
            'field' => 'project-title'
        ],
        'fields' => [
            'project-title' => [
                'type' => 'text',
                'label' => esc_html__('Project Name', 'textdomain'),
                'default' => '',
            ],
            'role' => [
                'type' => 'text',
                'label' => esc_html__('Role', 'textdomain'),
                'default' => '',
            ],
            'description' => [
                'type' => 'textarea',
                'label' => esc_html__('Description', 'textdomain'),
                'default' => '',
            ],
            'highlights' => [
                'type' => 'textarea',
                'label' => esc_html__('Highlights', 'textdomain'),
                'default' => '',
            ],
        ]
    ]);

}

register_nav_menus(
    array('primary-menu' => 'primary menu')
);

add_action('wp_enqueue_scripts', 'enqueue_portofolio_styles');
add_action('customize_register', 'portfolio_customizer_register');
