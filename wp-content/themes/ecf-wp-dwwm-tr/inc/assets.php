<?php

function ecf_register_assets() {

    // Déclarer le JS
	wp_enqueue_script( 
        'nav', 
        get_template_directory_uri() . '/js/nav.js', 
        array(), 
        '1.0', 
        true
    );

    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );

    // Normalize
    wp_enqueue_style( 
        'base', 
        get_template_directory_uri() . '/css/base.css',
        array(), 
        '1.0'
    );

    // Custom style
    wp_enqueue_style( 
        'main', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'ecf_register_assets' );