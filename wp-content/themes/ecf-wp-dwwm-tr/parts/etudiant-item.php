<div class="post">

    <?php the_post_thumbnail(); ?>
    
    <p class="post__meta">
        <?php the_time( 'd/m/Y' ); ?>
    </p>
    <h2><?php the_title(); ?></h2>

    <?php the_excerpt(); ?>
    
    <p>
        <a href="<?php the_permalink(); ?>" class="post__link">En savoir plus</a>
    </p>

</div>

<!-- Ça va être un CPT -->