<?php
$hp_category_1 = get_field('hp_category_1', 'options');
$hp_category_1_img = get_field('hp_category_1_img', 'options');
$hp_cat_1_img_lg = wp_get_attachment_image_src($hp_category_1_img, 'full');
$hp_cat_1_img_sm = wp_get_attachment_image_src($hp_category_1_img, 'thumbnail');
$hp_category_2 = get_field('hp_category_2', 'options');
$hp_category_2_img = get_field('hp_category_2_img', 'options');
$hp_cat_2_img_lg = wp_get_attachment_image_src($hp_category_2_img, 'full');
$hp_cat_2_img_sm = wp_get_attachment_image_src($hp_category_2_img, 'thumbnail');
$hp_category_3 = get_field('hp_category_3', 'options');
$hp_category_3_img = get_field('hp_category_3_img', 'options');
$hp_cat_3_img_lg = wp_get_attachment_image_src($hp_category_3_img, 'full');
$hp_cat_3_img_sm = wp_get_attachment_image_src($hp_category_3_img, 'thumbnail');
$hp_category_4 = get_field('hp_category_4', 'options');
$hp_category_4_img = get_field('hp_category_4_img', 'options');
$hp_cat_4_img_lg = wp_get_attachment_image_src($hp_category_4_img, 'full');
$hp_cat_4_img_sm = wp_get_attachment_image_src($hp_category_4_img, 'thumbnail');
?>

<section id="top-tips" class="tips-grid page-section">
	<h2 class="header-caps text-center"><span>Must read articles</span></h2>
	<div class="container">
		<ul class="list-unstyled row">
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_1); ?>" class="tip-link loading">
					<div class="grid-img" data-src="<?php echo $hp_cat_1_img_lg[0]; ?>" style="background-image: url(<?php echo $hp_cat_1_img_sm[0]; ?>)">
						<span class="title"><span><?php echo get_cat_name($hp_category_1); ?></span></span>
					</div>					
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_2); ?>" class="tip-link loading">
					<div class="grid-img" data-src="<?php echo $hp_cat_2_img_lg[0]; ?>" style="background-image: url(<?php echo $hp_cat_2_img_sm[0]; ?>)">
						<span class="title"><span><?php echo get_cat_name($hp_category_2); ?></span></span>
					</div>					
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_3); ?>" class="tip-link loading">
					<div class="grid-img" data-src="<?php echo $hp_cat_3_img_lg[0]; ?>" style="background-image: url(<?php echo $hp_cat_3_img_sm[0]; ?>)">
						<span class="title"><span><?php echo get_cat_name($hp_category_3); ?></span></span>
					</div>					
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_4); ?>" class="tip-link loading">
					<div class="grid-img" data-src="<?php echo $hp_cat_4_img_lg[0]; ?>" style="background-image: url(<?php echo $hp_cat_4_img_sm[0]; ?>)">
						<span class="title"><span><?php echo get_cat_name($hp_category_4); ?></span></span>
					</div>				
				</a>
			</li>
		</ul>
	</div>
</section>