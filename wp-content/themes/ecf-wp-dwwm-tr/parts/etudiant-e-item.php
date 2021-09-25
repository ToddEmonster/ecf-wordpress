<article class="student">
    <?php
        $image_id = get_field( 'photo' );
            if( $image_id ) {	
                echo wp_get_attachment_image(
                    $image_id,
                    'full',
                    '',
                    array( "class" => "student-img" )
                );
    } ?>
    <h2 class="student-name"><?php the_title(); ?></h2> 
    <a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
</article>