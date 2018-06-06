<?php
	/**
	* Theme initiate.
	*/
	require get_parent_theme_file_path( '/inc/theme-init.php' );
	
	/**
	* Enqueue scripts and styles.
	*/
	require get_parent_theme_file_path( '/inc/scripts.php' );
	
	/**
	* Editor functions
	*/
	require get_parent_theme_file_path( '/inc/editor-functions.php' );
	
	/**
	* ACF functions
	*/
	require get_parent_theme_file_path( '/inc/acf-functions.php' );
	
	add_filter ('get_archives_link',
	function ($link_html, $url, $text, $format, $before, $after) {
	//echo $format;
    if ('a' == $format) {
        $link_html = "<a href=\"$url\" class=\"dropdown-item\">"
                   . "$text"
                   . '</a>';
    }
    return $link_html;
	}, 10, 6);
	
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );
	
/* Add Next Page Button in First Row */
add_filter( 'mce_buttons', 'my_add_next_page_button', 1, 2 ); // 1st row

function my_add_next_page_button( $buttons, $id ){
 
    /* only add this for content editor */
    if ( 'content' != $id )
        return $buttons;
 
    /* add next page after more tag button */
    array_splice( $buttons, 13, 0, 'wp_page' );
 
    return $buttons;
}
//remove_filter( 'the_content', 'wpautop' );
//add_filter( 'the_content', 'wpautop' , 12);

/*
function panel_shortcode($attr, $content = null) {
	
	extract(shortcode_atts(array(
        'type' => 'port'
    ), $attr));
    
	return '<div class="info-panel img-'.esc_attr($type).'">'.do_shortcode($content).'</div>';
}

function row_shortcode($attr, $content = null) {
	return '<div class="row">'.do_shortcode($content).'</div>';
}
function cols6_shortcode($attr, $content = null) {
	return '<div class="col-6">'.do_shortcode($content).'</div>';
}

function register_shortcodes(){
	add_shortcode('row', 'row_shortcode');
	add_shortcode('col-6', 'cols6_shortcode');
   add_shortcode('panelBox', 'panel_shortcode');
}

add_action( 'init', 'register_shortcodes');
*/
?>