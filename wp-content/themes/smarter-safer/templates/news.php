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
				<?php if(has_category('in-the-news', $item->ID)): ?>
					<div class="news-item">
						<a target="_blank" href="<?php the_field('link', $item->ID) ?>">
							<h3><small>In The News</small><?php echo $item->post_title; ?></h3>
							<img src="<?php echo get_the_post_thumbnail_url($item->ID) ?>" alt="">
						</a>
					</div>
				<?php else: ?>
					<div class="news-item">
						<a href="<?php the_permalink($item->ID) ?>">
							<h3><small>Press Release</small><?php echo $item->post_title; ?></h3>
							<img src="<?php echo get_the_post_thumbnail_url($item->ID) ?>" alt="">
						</a>
					</div>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</section>
</main>

<?php get_footer(); ?>