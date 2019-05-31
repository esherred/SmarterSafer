	<footer>
		<div class="inner">
			<div class="nav">
				<?php
        wp_nav_menu([
          'menu'            => 'footer',
          'theme_location'  => 'footer',
          'container'       => false,
          'container_id'    => false,
          'container_class' => false,
          'menu_id'         => false,
          'menu_class'      => 'nav',
          'depth'           => 1
        ]);
			?>
			</div>
			<div class="disclaimer">
				Copyright &copy; 2019 SmarterSafer.org
			</div>
		</div>
	</footer>


	<?php wp_footer(); ?>
</body>
</html>