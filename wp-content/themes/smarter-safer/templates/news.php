<?php /* Template Name: News Page */ ?>

<?php get_header(); ?>

<main>
	<section class="header news">
		<h1>Latest News</h1>
	</section>
	
	<section class="news-items">
		<?php 
			$news = get_posts(array(
				'numberposts' => '-1',
			));
		?>
		<?php foreach($news as $item): ?>
			<?php if(has_category('in-the-news', $item->ID)): ?>
				<div class="news-item">
					<a target="_blank" href="<?php the_field('link', $item->ID) ?>">
						<h3><small>In The News</small><?php echo $item->post_title; ?></h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			<?php else: ?>
				<div class="news-item">
					<a href="<?php the_permalink($item->ID) ?>">
						<h3><small>Press Release</small><?php echo $item->post_title; ?></h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>
</main>

<?php get_footer(); ?>