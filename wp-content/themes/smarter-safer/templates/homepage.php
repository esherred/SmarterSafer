<?php /* Template Name: Homepage */ ?>

<?php the_post() ?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>

<?php get_header(); ?>

<main>
	<section class="header home">
		<div class="container">
			<div class="feature-image">
				<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
			</div>
			<div class="shadow">
				<h2>Dangerous weather events and natural disasters are predicted to only get worse.</h2>
				<div class="button"><a href="#">Download our Congressional Guide <i class="fas fa-arrow-right"></i></a></div>
			</div>
		</div>
	</section>

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

	<section class="featured blue">
		<div class="container">
			<h2>Current Work</h2>
			<div class="featured-image">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/andy-feliciotti-579740-unsplash.jpg" alt="">
			</div>
			<div class="content">
			‘How to Reform US Disaster Policy to Prepare for a Coming Century of Crisis’ lays out a roadmap to a more rational approach to federal disaster policies that will save taxpayer dollars, protect the environment, and better prepare Americans for the risks they face now – and the risks natural disasters will pose in the future. 

				<div class="more"><a href="#">Download The Report <i class="fas fa-arrow-right"></i></a></div>
			</div>
		</div>
	</section>

	<section class="latest">
		<div class="container">
			<h2>Latest News</h2>
			<?php 
				$news = get_posts(array(
					'numberposts' => '-1',
				));
			?>
			<?php foreach($news as $item): ?>
				<?php if(has_category('in-the-news', $item->ID)): ?>
					<div class="news">
						<a target="_blank" href="<?php the_field('link', $item->ID) ?>">
							<h3><small>In The News</small><?php echo $item->post_title; ?></h3>
							<img src="<?php echo get_the_post_thumbnail_url($item->ID) ?>" alt="">
						</a>
					</div>
				<?php else: ?>
					<div class="news">
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