<?php get_header(); ?>

<main id="main-content" class="last-news">
	<div class="container">
		<h1 class="section-title">ACTUALITÉS</h1>
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/archive-item' ); ?>
		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer(); ?>