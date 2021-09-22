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
				'menu_class' => 'footer-nav menu' ) ); ?>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>