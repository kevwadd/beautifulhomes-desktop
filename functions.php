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
?>