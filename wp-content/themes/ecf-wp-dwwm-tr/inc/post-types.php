<?php

function todd_register_post_types() {

    // CPT Étudiant
    $labels = array(
        'name' => 'Étudiant',
        'all_items' => 'Tous les étudiant•e•s',  // affiché dans le sous menu
        'singular_name' => 'Étudiant•e',
        'add_new_item' => 'Ajouter un•e étudiant•e',
        'edit_item' => 'Modifier l\'étudiant•e',
        'menu_name' => 'Étudiant•e'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'revisions' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-universal-access',
    );

    register_post_type( 'etudiant-e', $args );

    // CPT Module
    $labels = array(
        'name' => 'Module',
        'all_items' => 'Tous les modules',
        'singular_name' => 'Module',
        'add_new_item' => 'Ajouter un module',
        'edit_item' => 'Modifier le module',
        'menu_name' => 'Module'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail', 'revisions' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-book-alt',
    );

    register_post_type( 'module', $args );
}
add_action( 'init', 'todd_register_post_types' );