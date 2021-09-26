<?php get_header(); ?>

<main id="main-content" class="post">
	<div class="container container-narrow">
		<?php the_post_thumbnail( 'single-actu', [
			'class' => 'featured-img',
			'alt' => get_the_title(),
			'loading' => 'lazy'
		]); ?>
		<h1><?php the_title(); ?></h1>
		<p class="post-date"><?php echo get_the_date(); ?></p>
		<?php the_content(); ?>
	</div>
</main>

<?php get_footer(); ?>