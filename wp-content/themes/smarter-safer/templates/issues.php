<?php /* Template Name: Issues Page */ ?>

<?php the_post(); ?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>


<?php get_header(); ?>

<main>
	<section class="header issue blue">
		<div class="container">
			<h1><?php the_title() ?></h1>
			<?php if($featured_img_url) : ?>
				<div class="feature-image">
					<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
				</div>
			<?php endif; ?>
			<div class="intro">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	
	<section class="posts">
		<div class="container">
			<div class="resources">
				<h2>Latest Resources</h2>
				<?php 
					$cats = array(
						get_field('default_category'),
						get_cat_ID('resource')
					);
					$resources = get_posts(array(
						'numberposts' => '-1',
						'category__and' => $cats,
					));
				?>
				<?php if($resources): ?>
					<?php foreach($resources as $item): ?>
						<?php
							if(get_the_post_thumbnail_url($item->ID)) {
								$thumb = get_the_post_thumbnail_url($item->ID);
							} else if(has_category('flooding', $item->ID)) {
								$thumb = get_field('default_flooding','options');
							} else if(has_category('wildfires', $item->ID)) {
								$thumb = get_field('default_wildfires','options');
							} else if(has_category('earthquake', $item->ID)) {
								$thumb = get_field('default_earthquake','options');
							} else {
								$thumb = get_field('default_image','options');
							}
						?>
						<div class="post">
							<a href="<?php the_permalink($item->ID) ?>">
								<h3><?php echo $item->post_title; ?></h3>
								<img src="<?php echo $thumb ?>" alt="<?php echo $item->post_title; ?>">
							</a>
						</div>
					<?php endforeach; ?>
				<?php else: ?>
					Resources coming soon!
				<?php endif; ?>
			</div>

			<div class="news-items">
				<h2>Latest News</h2>
				<?php 
					$cats = array(
						get_cat_ID('in-the-news'),
						get_cat_ID('press-release'),
					);
					$news = get_posts(array(
						'numberposts' => '6',
						'cat' => $cats,
					));
					$has_posts = false;
					if($news){
						foreach($news as $item) {
							if(has_category(get_field('default_category'), $item->ID)) {
								$has_posts = true;
							}
						}
					}
				?>
				<?php if($has_posts): ?>
					<?php foreach($news as $item): ?>
						<?php if(has_category(get_field('default_category'), $item->ID)) : ?>
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
							<div class="post">
								<a href="<?php the_permalink($item->ID) ?>">
									<h3><?php echo $item->post_title; ?></h3>
									<img src="<?php echo $thumb ?>" alt="<?php echo $item->post_title; ?>">
								</a>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php else: ?>
					More news coming soon!
				<?php endif; ?>
				<div class="more">
					<h3><a href="/latest-news">Read More News <i class="fas fa-arrow-right"></i></a></h3>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>