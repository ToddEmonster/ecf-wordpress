<?php get_header(); ?>

<main id="main-content" class="last-news">
	<div class="container">

		<h1 class="section-title">ACTUALITÉS</h1>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/actualite-item' ); ?>
		<?php endwhile; endif; ?>

		<?php the_posts_pagination( array(
			'class' => 'pagination',
			'aria_label' => 'Actualités',
			'prev_text' => '«',
			'next_text' => '»',
		)); ?>

	</div>
</main>

<?php get_footer(); ?>