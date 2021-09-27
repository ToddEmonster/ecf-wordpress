<?php get_header(); ?>

<main id="main-content" class="modules">

	<div class="container container-narrow">
		<h1 class="modules-title">Les modules de la formation</h1>
		<div class="module-desc">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum est ultricies integer quis. Iaculis urna id volutpat lacus laoreet. Mauris vitae ultricies leo integer malesuada. Ac odio tempor orci dapibus ultrices in. Egestas diam in arcu cursus euismod. Dictum fusce ut placerat orci nulla. Tincidunt ornare massa eget egestas purus viverra accumsan in nisl. Tempor id eu nisl nunc mi ipsum faucibus. Fusce id velit ut tortor pretium. Massa ultricies mi quis hendrerit dolor magna eget. Nullam eget felis eget</p>
		</div>
	</div>

	<div class="container">
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