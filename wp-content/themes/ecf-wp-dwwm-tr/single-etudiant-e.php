<?php get_header(); ?>

<main id="main-content" class="student-post">
    <div class="container">
        <?php
            $image_id = get_field( 'photo' );
                if( $image_id ) {	
                    echo wp_get_attachment_image(
                        $image_id,
                        'full',
                        '',
                        array( "class" => "student-post-img" )
                    );
        } ?>
        <h1 class="student-post-title"><?php the_title(); ?></h1>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('film')['label'] ?></div>
            <div class="field-content"><?php the_field( 'film' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('serie')['label'] ?></div>
            <div class="field-content"><?php the_field( 'serie' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('jeu_video')['label'] ?></div>
            <div class="field-content"><?php the_field( 'jeu_video' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('heros-ine')['label'] ?></div>
            <div class="field-content"><?php the_field( 'heros-ine' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('livre')['label'] ?></div>
            <div class="field-content"><?php the_field( 'livre' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('film')['label'] ?></div>
            <div class="field-content"><?php the_field( 'chanson' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('application')['label'] ?></div>
            <div class="field-content"><?php the_field( 'application' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('site_web')['label'] ?></div>
            <div class="field-content"><?php the_field( 'site_web' ); ?></div>
        </div>
        <div class="field">
            <div class="field-title"><?php echo get_field_object('background')['label'] ?></div>
            <div class="field-content"><?php the_field( 'background' ); ?></div>
        </div>
    </div>
</main>

<?php get_footer(); ?>