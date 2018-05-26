<?php
$rate_my_rooms_pg = get_page_by_path('rate-my-rooms');
$bg_img_sml = get_the_post_thumbnail_url($rate_my_rooms_pg->ID, 'banner-mb-400-133');
$bg_img_lg = get_the_post_thumbnail_url($rate_my_rooms_pg->ID, 'banner-dt-1500-500');
?>
<section id="rate-my-room" class="bg-img-section loading">
	<div class="container">
		<a href="<?php echo get_permalink($rate_my_rooms_pg->ID); ?>" class="caps header-lrg text-center"><span><?php echo get_the_title($rate_my_rooms_pg->ID); ?></span></a>
	</div>
	<div class="bg-img" data-src="<?php echo $bg_img_lg; ?>" style="background-image: url(<?php echo $bg_img_sml; ?>)"></div>
</section>