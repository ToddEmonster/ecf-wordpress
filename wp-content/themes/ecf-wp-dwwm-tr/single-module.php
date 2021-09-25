<?php get_header(); ?>

<main id="main-content" class="student-post">
    <section class="module-hero">
        <div class="container">
            <h1 class="student-post-title">Module <?php the_title(); ?></h1>
        </div>
    </section>
    <section class="module-desc">
        <div class="container container-narrow">
            <p><?php the_content(); ?></p>
        </div>
    </section>
        <?php
            /* $image_id = get_field( 'photo' );
                if( $image_id ) {	
                    echo wp_get_attachment_image(
                        $image_id,
                        'full',
                        '',
                        array( "class" => "student-post-img" )
                    ); 
        } */ ?>
</main>

<?php get_footer(); ?>