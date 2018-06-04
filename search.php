<?php get_header(); ?>

	<?php 
	$allsearch = new WP_Query("s=$s&showposts=-1"); 
	wp_reset_query();
	$search_count = $allsearch->post_count;
	$search_query = get_search_query(); 
	//echo '<pre>';print_r($posts);echo '</pre>';
	?>
	
	<?php get_template_part( 'parts/global/search', 'loop' ); ?>
	
	<?php get_template_part( 'parts/blog/post', 'pagination' ); ?>

<?php get_footer(); ?>
