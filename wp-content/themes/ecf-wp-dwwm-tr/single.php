<?php get_header(); ?>

    <article class="post">
		<?php the_post_thumbnail(); ?>

		<h1><?php the_title(); ?></h1>

		<div class="post__meta">
			<p> <?php the_date(); ?></p>
		</div>

		<div class="post__content">
			<?php the_content(); ?>
		</div>
    </article>

<?php get_footer(); ?>