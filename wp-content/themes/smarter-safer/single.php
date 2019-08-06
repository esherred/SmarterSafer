<?php the_post(); ?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>

<?php get_header(); ?>

<main>
	<section class="header issue blue">
		<div class="container">
			<h1><?php the_title() ?></h1>
			<?php if($featured_img_url && !get_field('hide_featured')) : ?>
				<div class="feature-image">
					<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
				</div>
			<?php endif; ?>
		</div>
	</section>
	
	<article>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</article>
</main>

<?php get_footer(); ?>