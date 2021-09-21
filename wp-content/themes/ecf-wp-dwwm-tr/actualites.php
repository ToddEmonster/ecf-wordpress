<?php get_header(); ?>

<h1>ACTUALITÉS</h1>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'parts/archive-item' ); ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>