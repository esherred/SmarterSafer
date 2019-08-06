<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale = 1.0" />

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SmarterSafer</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="<?php echo is_front_page() ? 'front' : ''; ?>">
		<div class="logo">
			<a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/smartersafer.png" alt=""></a>
		</div>
		<nav>
			<div class="close"><i class="fas fa-times"></i></div>
			<?php
        wp_nav_menu([
          'menu'            => 'main',
          'theme_location'  => 'main',
          'container'       => false,
          'container_id'    => false,
          'container_class' => false,
          'menu_id'         => false,
          'menu_class'      => 'nav',
          'depth'           => 2
        ]);
			?>
			<ul class="social">
				<li><a href="https://twitter.com/SmarterSafer" target="_blank"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</nav>
		<div class="mobile-menu">
			<i class="fas fa-bars"></i>
		</div>
	</header>