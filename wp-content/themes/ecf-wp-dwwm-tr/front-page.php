<?php get_header(); ?>

<main id="main-content">
    <section
		class="home-hero inverted"
		style="background-image: url( <?php the_post_thumbnail_url('accueil_hero') ?> );">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Bienvenue sur le site de la promotion DWWM2019-2</h1>
                <a href=<?php echo get_post_type_archive_link('etudiant-e') ?> class="hero-link">Rencontrez nos étudiants</a>
            </div>
        </div>
    </section>
    <section class="last-news">
        <div class="container">
            <h2 class="section-title">Les dernières actualités</h2>
			<?php $args = array(
					'post_type' => 'post',
					'category_name' => 'actualites',
					'posts_per_page' => 3,
				);
				$news_query = new WP_Query( $args );
				if( $news_query->have_posts() ) : while( $news_query->have_posts() ) : $news_query->the_post();
					get_template_part( 'parts/actualite-item' );
				endwhile; endif;
			?>
        </div>
    </section>
    <section class="students inverted">
        <div class="container">
            <h2 class="section-title">Rencontrez les étudiants</h2>
			<?php $args = array(
					'post_type' => 'etudiant-e',
					'posts_per_page' => 4,
				);
				$students_query = new WP_Query( $args );
				if( $students_query->have_posts() ) : while( $students_query->have_posts() ) : $students_query->the_post();
					get_template_part( 'parts/etudiant-e-item' );
				endwhile; endif;
			?>
        </div>
    </section>
    <section class="modules">
        <div class="container">
            <h2 class="section-title">Les modules de la formation</h2>
			<?php $args = array(
					'post_type' => 'module',
					'posts_per_page' => 2,
				);
				$module_query = new WP_Query( $args );
				if( $module_query->have_posts() ) : while( $module_query->have_posts() ) : $module_query->the_post();
					get_template_part( 'parts/module-item' );
				endwhile; endif;
			?>
        </div>
    </section>
</main>

<?php get_footer(); ?>