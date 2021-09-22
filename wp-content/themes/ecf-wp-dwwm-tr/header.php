<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="main-header">
        <a href="<?php echo home_url( '/' ); ?>">DWWM</a>
        <?php wp_nav_menu(
            array( 
                'theme_location' => 'main', 
                'container' => 'ul', // afin d'éviter d'avoir une div autour 
                'menu_class' => 'main-nav', // ma classe personnalisée 
        )  ); ?>
        
        <!-- <a href="<?php /*echo home_url( '/actualites' ); ?>">Actualités</a>
        <a href="<?php echo home_url( '/etudiant-e-s' );*/ ?>">Les Étudiant•e•s</a> -->

    </header>
    <?php wp_body_open(); ?>