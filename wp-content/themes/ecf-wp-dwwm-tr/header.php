<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <a href="#main-menu" class="screen-reader-text">Aller à la navigation principale</a>
	<a href="#main-content" class="screen-reader-text">Aller au contenu principal</a>
    <header class="main-header">
        <div class="container">
            <div class="logo"><a href="<?php echo home_url( '/' ); ?>">DWWM</a></div>
            <?php wp_nav_menu( array( 
                    'theme_location' => 'main',
                    'container' => 'nav',
                    'container_class' => 'main-nav',
                    'before' => '<button aria-expanded="false" aria-controls="main-menu">Menu</button>',
                    'menu_class' => 'menu',
            ) ); ?>
        </div>
    </header>
    <?php wp_body_open(); ?>