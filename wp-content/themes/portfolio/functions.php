<?php

function enqueue_portofolio_styles () {
    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'enqueue_portofolio_styles' );