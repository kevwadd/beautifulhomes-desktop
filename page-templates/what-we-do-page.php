<?php
/*
Template Name: What We Do Page
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
		<div class="col-7 main-txt">
		<?php the_content(); ?>
		</div>
		<div class="col-1"></div>
		<div class="col-4 sb-txt">
			<?php get_template_part( 'parts/sidebar/panel', 'team' ); ?>
			
			<?php get_template_part( 'parts/sidebar/panel', 'faqs' ); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>