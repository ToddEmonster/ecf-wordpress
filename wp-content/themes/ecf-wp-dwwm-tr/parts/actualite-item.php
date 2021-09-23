<article class="card">

    <?php the_post_thumbnail('single-actu', [
        'class' => 'card-img',
        'alt' => get_the_title(),
        'loading' => 'lazy'
    ]); ?>
    <div class="card-content">
        <p class="card-date"> <?php the_time( 'd/m/Y' ); ?></p>
        <h2 class="card-title"><?php the_title(); ?></h2>
        <p class="card-excerpt"><?php the_excerpt(); ?></p>
    </div>  
    <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite</a>


</article>