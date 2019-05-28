<?php get_header(); ?>

<main>
	<section class="header">
		<h2>Dangerous weather events and natural disasters are predicted to only get worse.</h2>
		<div class="button"><a href="#">Download our Congressional Guide <i class="fas fa-arrow-right"></i></a></div>
		<div class="feature-image">
			<img src="//unsplash.it/1400/600">
		</div>
		<div class="intro">
		SmarterSafer.org is a national coalition that is made up of a diverse chorus of voices united in favor of environmentally-responsible, fiscally-sound approaches to natural catastrophe policy that promotes public safety.
		</div>
		<div class="issues">
			<h2>Issues</h2>
			<div class="issue">
				<a href="/earthquakes">
					<h3>Earthquakes</h3>
					<img src="//unsplash.it/400/400" alt="">
				</a>
			</div>
			<div class="issue">
				<a href="/flooding">
					<h3>Flooding</h3>
					<img src="//unsplash.it/400/400" alt="">
				</a>
			</div>
			<div class="issue">
				<a href="/wildfires">
					<h3>Wildfires</h3>
					<img src="//unsplash.it/400/400" alt="">
				</a>
			</div>
		</div>
	</section>

	<section class="latest">
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
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			<?php else: ?>
				<div class="news">
					<a href="<?php the_permalink($item->ID) ?>">
						<h3><small>Press Release</small><?php echo $item->post_title; ?></h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</section>

	<section class="featured">
		<h2>Current Work</h2>
		<div class="featured-image">
			<img src="//unsplash.it/600/600" alt="">
		</div>
		<div class="content">
		‘How to Reform US Disaster Policy to Prepare for a Coming Century of Crisis’ lays out a roadmap to a more rational approach to federal disaster policies that will save taxpayer dollars, protect the environment, and better prepare Americans for the risks they face now – and the risks natural disasters will pose in the future. 

			<div class="more"><a href="#">Download The Report <i class="fas fa-arrow-right"></i></a></div>
		</div>
	</section>
</main>

<?php get_footer(); ?>