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
				<div class="post">
					<a href="#">
						<h3>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			</div>
			<div class="news-items">
				<h2>Latest News</h2>
				<div class="post">
					<a href="#">
						<h3><small>Category</small>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3><small>Category</small>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3><small>Category</small>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
				<div class="post">
					<a href="#">
						<h3><small>Category</small>Title</h3>
						<img src="//unsplash.it/400/400" alt="">
					</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>