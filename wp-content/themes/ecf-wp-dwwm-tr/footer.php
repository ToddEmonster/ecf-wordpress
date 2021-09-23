    <footer class="main-footer">
		<div class="container">
			<address>
				<strong>Développeur Web et Web Mobile</strong><br>
				CEFIM<br>
				32 Avenue Marcel Dassault<br>
				37200 Tours<br>
				T : <a href="tel:0247402680">02 47 40 26 80</a>
			</address>
			<?php wp_nav_menu( array(
				'theme_location' => 'footer',
				'container' => 'nav',
				'container_class' => 'footer-nav',
				'menu_class' => 'menu'
			) ); ?>
            <?php
			$social = 'facebook';
			wp_nav_menu( array( 
				'theme_location' => 'social',
				'container' => 'nav',
				'container_class' => 'social-nav',
				'menu_class' => 'menu',
				'link_after' =>
					'<img loading="lazy" src=' . 
					get_stylesheet_directory_uri() . "/img/icon-$social.svg"
					. " alt='$social'>",
			) ); ?>
			<!-- TODO change based on menu item class - either a tag or a taxonomy
			https://developer.wordpress.org/reference/functions/wp_nav_menu/#all-menu-items -->
            <!-- <nav class="social-nav">
				<ul class="menu">
					<li class="menu-item"><a href="https://www.facebook.com/cefimformation/" target="_blank"><span class="screen-reader-text">Facebook du CEFIM</span><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() . '/img/icon-facebook.svg' ?>" alt="Facebook"></a></li>
					<li class="menu-item"><a href="https://twitter.com/cefimFormation/" target="_blank"><span class="screen-reader-text">Twitter du CEFIM</span><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() . '/img/icon-twitter.svg' ?>" alt="Twitter"></a></li>
					<li class="menu-item"><a href="https://www.linkedin.com/school/cefim/" target="_blank"><span class="screen-reader-text">LinkedIn du CEFIM</span><img loading="lazy"  src="<?php echo get_stylesheet_directory_uri() . '/img/icon-linkedin.svg' ?>" alt="LinkedIn"></a></li>
				</ul>
			</nav> -->

		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>