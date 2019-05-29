<?php the_post(); ?>

<?php $featured_img_url = get_the_post_thumbnail_url(); ?>

<?php get_header(); ?>

<article>
	<h1><?php the_title() ?></h1>
	<?php if($featured_img_url) : ?>
		<div class="feature-image">
			<img src="<?php echo $featured_img_url ?>" alt="<?php the_title(); ?>">
		</div>
	<?php endif; ?>
	<div class="content">
		<?php the_content(); ?>
	</div>
</article>

<?php get_footer(); ?>