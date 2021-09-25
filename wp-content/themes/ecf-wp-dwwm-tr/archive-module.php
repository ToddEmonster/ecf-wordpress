<?php get_header(); ?>

<main id="main-content" class="last-news">
	<div class="container">

		<h1 class="section-title"><?php get_the_archive_title(); ?></h1>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/module-item' ); ?>
		<?php endwhile; endif; ?>

		<?php the_posts_pagination( array(
			'class' => 'pagination',
			'aria_label' => 'Modules',
			'prev_text' => '«',
			'next_text' => '»',
		)); ?>

	</div>
</main>

<?php get_footer(); ?>