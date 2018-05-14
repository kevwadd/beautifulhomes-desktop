<?php
$bg_img_sml = get_stylesheet_directory_uri()."/assets/img/ratemyroom-bg-img-sml.png";
$bg_img_lg = get_stylesheet_directory_uri()."/assets/img/ratemyroom-bg-img.png";
$rate_my_rooms_pg = get_page_by_path('rate-my-rooms');
?>
<section id="rate-my-room" class="bg-img-section loading">
	<div class="container">
		<a href="<?php echo get_permalink($rate_my_rooms_pg->ID); ?>" class="caps header-lrg text-center"><span><?php echo get_the_title($rate_my_rooms_pg->ID); ?></span></a>
	</div>
	<div class="bg-img" data-src="<?php echo $bg_img_lg; ?>" style="background-image: url(<?php echo $bg_img_sml; ?>)"></div>
</section>