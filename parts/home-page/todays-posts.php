<?php
$post_args = array(
	'posts_per_page'   => 6,
	'offset'          => 1
);
$hp_posts = get_posts($post_args);
//echo '<pre>';print_r($posts);echo '</pre>';
?>

<section id="hp-posts" class="post-grid page-section">
	<h2 class="header-caps text-center"><span>Recent blog articles</span></h2>
	<div class="container">
		<ul class="list-unstyled row">
			<?php
			global $post;
			foreach ( $hp_posts as $post ) : setup_postdata( $post ); ?>
			<?php
			$feat_img = get_the_post_thumbnail_url($post->ID, 'thumbnail');
			$feat_img_lg = get_the_post_thumbnail_url($post->ID, 'large');	
			$words_by = get_field('words_by');
			$photos_by = get_field('photos_by');
			//echo '<pre>';print_r($words_by[display_name]);echo '</pre>';	
			?>
				<li class="col-4">
					<article <?php post_class("grid-item"); ?>>
						<a href="<?php the_permalink(); ?>" class="grid-img-link">
							<div class="grid-img loading">
								<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
							</div>						
						</a>
						<div class="grid-txt d-flex flex-column">
							<div class="headline text-center">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
							<div class="post-meta text-center">
								<?php if (!empty($words_by)) { ?>
								Words: <?php echo $words_by['display_name']; ?><br>
								<?php } else { ?>
								Words: <?php the_author_meta( 'display_name' , $author_id ); ?><br>
								<?php } ?>
								<?php if (!empty($photos_by)) { ?>
								Photography: <?php echo $photos_by['display_name']; ?>
								<?php } ?>
							</div>
							<div class="post-date caps d-flex justify-content-center">
								<span class="align-self-end"><?php echo get_the_date( 'F j, Y', $top_post ); ?></span>
							</div>
						</div>
					</article>
				</li>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</ul>
	</div>
</section>