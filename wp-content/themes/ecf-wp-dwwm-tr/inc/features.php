<?php

function todd_register_assets() {

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

    // TODO Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'style_bis', 
        get_template_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'todd_register_assets' );