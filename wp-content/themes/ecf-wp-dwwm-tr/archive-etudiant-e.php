<?php get_header(); ?>

<main id="main-content" class="students">
	<div class="container">

		<h1 class="section-title">Les étudiant•es</h1>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'parts/etudiant-e-item' ); ?>
		<?php endwhile; endif; ?>

		<?php the_posts_pagination( array(
			'class' => 'pagination',
			'aria_label' => 'Étudiant•e•s',
			'prev_text' => '«',
			'next_text' => '»',
		)); ?>

	</div>
</main>

<?php get_footer(); ?>