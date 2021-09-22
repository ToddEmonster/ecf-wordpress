<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="main-header">
        <div class="container">
            <div class="logo"><a href="<?php echo home_url( '/' ); ?>">DWWM</a></div>
            <?php wp_nav_menu(
                array( 
                    'theme_location' => 'main',
                    'menu_class' => 'main-nav menu', // ma classe personnalisée 
            )  ); ?>

        </div>
    </header>
    <?php wp_body_open(); ?>