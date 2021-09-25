<article class="student">
    <img
        class="student-img"
        loading="lazy" 
        src="<?php the_field('photo') ?>"
        alt="<?php the_field('nom') ?>"
    >
    <h2 class="student-name"><?php the_title(); ?></h2> 

    <a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
</article>