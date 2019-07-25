<?php /* Template Name: News Page */ ?>

<?php get_header(); ?>

<main>
	<section class="header news blue">
		<div class="container">
			<h1>Latest News</h1>
		</div>
	</section>
	
	<section class="news-items">
		<div class="container">
			<?php 
				$news = get_posts(array(
					'numberposts' => '-1',
				));
			?>
			<?php foreach($news as $item): ?>
				<?php
					if(get_the_post_thumbnail_url($item->ID)) {
						$thumb = get_the_post_thumbnail_url($item->ID);
					} elseif(has_category('in-the-news', $item->ID) && get_field('default_in_the_news','options')) {
						$thumb = get_field('default_in_the_news','options');
					} elseif(has_category('press-release', $item->ID) && get_field('default_press_release','options')) {
						$thumb = get_field('default_press_release','options');
					} elseif(has_category('flooding', $item->ID) && get_field('default_flooding','options')) {
						$thumb = get_field('default_flooding','options');
					} elseif(has_category('wildfires', $item->ID) && get_field('default_wildfires','options')) {
						$thumb = get_field('default_wildfires','options');
					} elseif(has_category('earthquake', $item->ID) && get_field('default_earthquake','options')) {
						$thumb = get_field('default_earthquake','options');
					} else {
						$thumb = get_field('default_image','options');
					}
				?>
				<div class="news-item">
					<a href="<?php the_permalink($item->ID) ?>">
						<h3><?php echo $item->post_title; ?></h3>
						<img src="<?php echo $thumb ?>" alt="<?php echo $item->post_title; ?>">
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>