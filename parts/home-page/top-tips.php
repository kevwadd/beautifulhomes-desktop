<?php
$hp_category_1 = get_field('hp_category_1', 'options');
$hp_category_2 = get_field('hp_category_2', 'options');
$hp_category_3 = get_field('hp_category_3', 'options');
$hp_category_4 = get_field('hp_category_4', 'options');
?>

<section id="top-tips" class="tips-grid page-section">
	<h2 class="header-caps text-center"><span>Must read articles</span></h2>
	<div class="container">
		<ul class="list-unstyled row">
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_1); ?>" class="tip-link">
					<div class="grid-img loading">
						<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
					</div>
					<div class="headline text-center">
						<?php echo get_cat_name($hp_category_1); ?>
					</div>						
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_2); ?>" class="tip-link">
					<div class="grid-img loading">
						<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
					</div>
					<div class="headline text-center">
						<?php echo get_cat_name($hp_category_2); ?>
					</div>						
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_3); ?>" class="tip-link">
					<div class="grid-img loading">
						<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
					</div>
					<div class="headline text-center">
						<?php echo get_cat_name($hp_category_3); ?>
					</div>						
				</a>
			</li>
			<li class="col-3">
				<a href="<?php echo get_term_link($hp_category_4); ?>" class="tip-link">
					<div class="grid-img loading">
						<div class="img" data-src="<?php echo $feat_img_lg; ?>" style="background-image: url(<?php echo $feat_img; ?>)"></div>
					</div>
					<div class="headline text-center">
						<?php echo get_cat_name($hp_category_4); ?>
					</div>						
				</a>
			</li>
		</ul>
	</div>
</section>