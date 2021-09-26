<?php 

/* Paramètres de thème */

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Enlever le menu d'édition des commentaires dans WP Admin
function ecf_remove_menu_pages() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'ecf_remove_menu_pages' );

/* Images */

// Définir la taille des images mises en avant
set_post_thumbnail_size( 400, 260, true );

// TODO
// Création de tailles d'images personnalisées
// add_image_size('accueil_hero', 1440, 677);
// add_image_size('accueil_actu', 400, 260);
// add_image_size('accueil_formation', 617, 260);
// add_image_size('accueil_etudiants', 220, 220);
// add_image_size('single_etudiant', 400, 400);
// add_image_size('single_actu', 840, 606);
// add_image_size('single_module', 1440, 400, true);

// Ajout des tailles d'images dans l'éditeur
function ecf_editor_image_sizes( $sizes ) {
    $sizes = array_merge( $sizes, array(
        'accueil_hero' => '1440 x 677',
        'accueil_actu' => '400 x 260',
        'accueil_formation' => '617 x 260',
        'accueil_etudiants' => '220 x 220',
        'single_etudiant' => '400 x 400',
        'single_actu' => '840 x 606',
        'single_module' => '1440 x 400',
        // 'archive_thumbnail' => 'Archive 540 x 500',
        // 'portfolio_featured' => 'Portfolio featured 1100 x 500',
        // 'portfolio_preview' => 'Portfolio preview 635 x 400',
    ));
    return $sizes;
}
add_filter( 'image_size_names_choose', 'ecf_editor_image_sizes' );

/* Menus */

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
    'social' => 'Réseaux sociaux'
) );

/*  Miscellaneous config */

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

// Replace default "[...]" in excerpt
function new_excerpt_more( $more ) {
    return "<br />...";
}
add_filter('excerpt_more', 'new_excerpt_more');

// Display 16 items for Student CPT Archive
function student_override_query( $wp_query ) {
    if( $wp_query->is_main_query() and is_post_type_archive( 'etudiant-e' ) ): 
        $wp_query->set( 'posts_per_page', 16 );
    endif;
}
add_action( 'pre_get_posts', 'student_override_query' );

/* Contact Form 7 */

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');

// To access the Arrow SVG icon url from WP Admin Contact Form interface
function wpcf7_add_form_tag_arrow_icon_url() {
    // Add shortcode for the form [arrow_icon_url]
    wpcf7_add_form_tag( 'arrow_icon_url',
        'wpcf7_arrow_icon_url_form_tag_handler',
        array(
            'name-attr' => true
        )
    );
}
add_action( 'wpcf7_init', 'wpcf7_add_form_tag_arrow_icon_url' );

// Parse the shortcode in the frontend
function wpcf7_arrow_icon_url_form_tag_handler( $tag ) {
    global $wp;
    $arrow_url = get_stylesheet_directory_uri() . '/img/icon-arrow-right.svg';
    return $arrow_url;
}
