<?php get_header(); ?>

<main id="main-content" class="module-post">
    <section
        class="module-hero"
        style="background-image: url(
            <?php the_post_thumbnail_url('single_module') ?>
        );">
        <div class="container">
            <h1>Module <?php the_title(); ?></h1>
        </div>
    </section>
    <section class="module-desc">
        <div class="container container-narrow">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>