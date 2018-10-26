<?php
$related_posts_active = get_field('related_posts_active');
?>

<?php if ($related_posts_active) { ?>
<?php
$related_posts = get_field('related_posts');	
//echo '<pre>';print_r($related_posts);echo '</pre>';
?>

<section id="related-posts" class="related-posts-grid page-section">
	<h2 class="header-caps text-center"><span>Related articles</span></h2>
	<div class="container">
		<ul class="list-unstyled row">
			<?php foreach ($related_posts as $rp) { 
			$rp_img_lg = get_the_post_thumbnail_url($rp['post'], 'full');
			$rp_img_sm = get_the_post_thumbnail_url($rp['post'], 'thumbnail');
			//echo '<pre>';print_r($rp_img_lg);echo '</pre>';
			?>
			<li class="col-4">
				<a href="<?php echo get_permalink($rp['post']); ?>" class="rp-link loading">
					<div class="grid-img" data-src="<?php echo $rp_img_lg; ?>" style="background-image: url(<?php echo $rp_img_sm; ?>)">
						<span class="title"><span><?php echo get_the_title($rp['post']); ?></span></span>
					</div>					
				</a>
			</li>
			<?php } ?>
			
		</ul>
	</div>
</section>

<?php } ?>