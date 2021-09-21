<article class="post">

    <?php the_post_thumbnail(); ?>
    
    <p class="post__meta">
        <?php the_time( 'd/m/Y' ); ?>
    </p>
    <h2><?php the_title(); ?></h2>

    <?php the_excerpt(); ?>
    
    <p>
        <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
    </p>

</article>