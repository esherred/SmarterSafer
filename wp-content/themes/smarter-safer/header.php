<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>SmarterSafer</title>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="logo">
			<a href="/"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt=""></a>
		</div>
		<nav>
			<?php
        wp_nav_menu([
          'menu'            => 'main',
          'theme_location'  => 'main',
          'container'       => false,
          'container_id'    => false,
          'container_class' => false,
          'menu_id'         => false,
          'menu_class'      => 'nav',
          'depth'           => 1
        ]);
			?>
			<ul class="social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</nav>
	</header>