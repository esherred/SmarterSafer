<?php /* Template Name: Homepage */ ?>

<?php the_post() ?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>

<?php get_header(); ?>

<main>
	<?php while( have_rows('hero_section') ): the_row();  ?>
		<section class="header home">
			<div class="container">
				<div class="feature-image">
					<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
				</div>
				<div class="shadow">
					<h2><?php the_sub_field('hero_copy') ?></h2>
					<?php if(get_sub_field('hero_link_type') == 'file'): ?>
						<div class="button"><a target="_blank" href="<?php the_sub_field('file') ?>"><?php the_sub_field('button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php elseif(get_sub_field('hero_link_type') == 'page'): ?>
						<div class="button"><a href="<?php the_sub_field('internal_page') ?>"><?php the_sub_field('button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php elseif(get_sub_field('hero_link_type') == 'link'): ?>
						<div class="button"><a target="_blank" href="<?php the_sub_field('external_page') ?>"><?php the_sub_field('button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>

	<section class="intro blue">
		<div class="container">
			<?php the_content() ?>
		</div>
	</section>

	<section class="issues">
		<div class="container">
			<h2>Issues</h2>
			<div class="issue">
				<a href="/flooding">
					<h3>Flooding</h3>
					<img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('flooding')->ID) ?>" alt="">
				</a>
			</div>
			<div class="issue">
				<a href="/wildfires">
					<h3>Wildfires</h3>
					<img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('wildfires')->ID) ?>" alt="">
				</a>
			</div>
			<div class="issue">
				<a href="/earthquakes">
					<h3>Earthquakes</h3>
					<img src="<?php echo get_the_post_thumbnail_url(get_page_by_path('earthquakes')->ID) ?>" alt="">
				</a>
			</div>
		</div>
	</section>

	<?php while(have_rows('current_work_section')): the_row(); ?>
		<section class="featured blue">
			<div class="container">
				<h2>Current Work</h2>
				<div class="featured-image">
					<img src="<?php the_sub_field('current_work_image') ?>" alt="">
				</div>
				<div class="content">
					<?php the_sub_field('current_work_copy') ?>
					<?php if(get_sub_field('current_work_link_type') == 'file'): ?>
						<div class="more"><a target="_blank" href="<?php the_sub_field('file') ?>"><?php the_sub_field('current_work_button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php elseif(get_sub_field('current_work_link_type') == 'page'): ?>
						<div class="more"><a href="<?php the_sub_field('internal_page') ?>"><?php the_sub_field('current_work_button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php elseif(get_sub_field('current_work_link_type') == 'link'): ?>
						<div class="more"><a target="_blank" href="<?php the_sub_field('external_page') ?>"><?php the_sub_field('current_work_button_copy') ?> <i class="fas fa-arrow-right"></i></a></div>
					<?php endif; ?>
				</div>
			</div>
		</section>
	<?php endwhile; ?>

	<section class="latest">
		<div class="container">
			<h2><a href="/latest-news">Latest News</a></h2>
			<?php 
				$news = get_posts(array(
					'numberposts' => '6',
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
				<div class="news">
					<a href="<?php the_permalink($item->ID) ?>">
						<h3><?php echo $item->post_title; ?></h3>
						<img src="<?php echo $thumb ?>" alt="<?php echo $item->post_title; ?>">
					</a>
				</div>
			<?php endforeach; ?>
			<div class="more">
				<h3><a href="/latest-news">Read More News <i class="fas fa-arrow-right"></i></a></h3>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>