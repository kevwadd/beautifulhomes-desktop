<?php
/*
Template Name: Rate My Room Page
*/
?>
<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<?php if (has_post_thumbnail()) { ?>
	<?php 
	$feat_img = get_the_post_thumbnail_url($post->ID, 'banner-mb-400-133'); 
	$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'banner-dt-1500-500');
	?>
	<div class="banner-img-slim loading">
		<div class="container">
			<h1 class="text-center caps"><span><?php the_title(); ?></span></h1>
		</div>
		<div class="bg-img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
	</div>
	<?php } ?>
<div class="container">
	<div class="row">
		<div class="col-5">
		<?php the_content(); ?>
		</div>
		<div class="col-7">
			
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>