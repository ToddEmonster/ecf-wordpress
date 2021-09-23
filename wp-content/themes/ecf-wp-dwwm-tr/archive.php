<?php get_header(); ?>

<main id="main-content" class="archive">
	<div class="container">

		<h1 class="section-title">ARCHIVE</h1>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/archive-item' ); ?>
		<?php endwhile; endif; ?>

		<?php the_posts_pagination( array(
			'class' => 'pagination',
			'aria_label' => 'Archive items',
			'prev_text' => '«',
			'next_text' => '»',
		)); ?>

	</div>
</main>

<?php get_footer(); ?>