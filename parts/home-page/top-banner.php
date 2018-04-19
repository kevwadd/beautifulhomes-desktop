<?php
$sticky = get_option( 'sticky_posts' );
$top_post = get_post($sticky[0]);
$author_id = $top_post->post_author;
$feat_img = get_the_post_thumbnail_url($top_post->ID, 'thumbnail');
$feat_img_lg = get_the_post_thumbnail_url($top_post->ID, 'full');
echo '<pre>';print_r($feat_img);echo '</pre>';	
?>

<section id="hp-banner" class="top-banner">
	<div class="container">
		<div class="row">
		<div class="col-8">
			<div class="banner-img loading">
				<div class="img" data-img-full="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
			</div>
		</div>
		<div class="col-4">
			<div class="banner-txt">
				<div class="cat-label caps text-center"><span>Category</span></div>
				<h2><a href="<?php echo get_permalink($top_post->ID); ?>"><?php echo get_the_title($sticky[0]); ?></a></h2>
				<div class="post-meta">
					<?php the_author_meta( 'user_nicename' , $author_id ); ?><br>
					<?php echo get_the_date( 'F d, Y', $top_post ); ?>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>