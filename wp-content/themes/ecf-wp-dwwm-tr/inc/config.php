<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function todd_remove_menu_pages() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'todd_remove_menu_pages' );

// TODO Définir la taille des images mises en avant
set_post_thumbnail_size( 400, 260, true );

// TODO
// /* Création de tailles d'images personnalisées */
// add_image_size('archive_thumbnail', 540, 500, true);
// add_image_size( 'portfolio_featured', 1100, 500, true );
// add_image_size( 'portfolio_preview', 635, 400, true );

// /* Ajout des tailles d'images dans l'éditeur */

// function todd_editor_image_sizes( $sizes ) {
//     $sizes = array_merge( $sizes, array(
//         'archive_thumbnail' => 'Archive 540 x 500',
//         'portfolio_featured' => 'Portfolio featured 1100 x 500',
//         'portfolio_preview' => 'Portfolio preview 635 x 400',
//     ));
//     return $sizes;
// }
// add_filter( 'image_size_names_choose', 'todd_editor_image_sizes' );
