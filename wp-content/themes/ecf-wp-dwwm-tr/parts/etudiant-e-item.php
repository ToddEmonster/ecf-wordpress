<article class="student">
    <img
        class="student-img"
        loading="lazy" 
        src="img/etudiant-1.jpg"
        srcset="img/etudiant-1.jpg,
                img/etudiant-1_2x.jpg 2x"
        alt="<?php the_title() ?>"
    >
    <h2 class="student-name">John Doe</h2> <!-- TODO change for the_name()... -->
    <a href="<?php the_permalink(); ?>" class="student-link">En savoir plus</a>
</article>