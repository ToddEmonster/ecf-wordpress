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
add_image_size('accueil_hero', 1440, 677);
add_image_size('accueil_actu', 400, 260);
add_image_size('accueil_formation', 617, 260);
add_image_size('accueil_etudiants', 220, 220);
add_image_size('single_etudiant', 400, 400);
add_image_size('single_actu', 840, 606);
add_image_size('single_module', 1440, 400, true);

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

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
    'social' => 'Réseaux sociaux'
) );

// Get rid of the "Category" in archives title
function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax() ) {
        $title = single_term_title( '', false );
    }

    return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );

function new_excerpt_more( $more ) {
    return ' ...'; // replace the normal [...]
}   
add_filter('excerpt_more', 'new_excerpt_more');