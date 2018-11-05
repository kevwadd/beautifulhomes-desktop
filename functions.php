<?php
/*
	update_option( 'siteurl', 'https://www.beautifulhomesinthenorth.co.uk' );
	update_option( 'home', 'https://www.beautifulhomesinthenorth.co.uk' );
*/
	
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

function add_login_logout_register_menu( $items, $args ) {
//echo '<pre>';print_r($args);echo '</pre>';
 if ( $args->menu != 'Footer right nav' ) {
 return $items;
 }
 
 if ( is_user_logged_in() ) {
 $items .= '<li><a href="' . wp_logout_url() . '">' . __( 'Log Out' ) . '</a></li>';
 } else {
 $items .= '<li><a href="' . wp_login_url() . '">' . __( 'Login In' ) . '</a></li>';
 $items .= '<li><a href="' . wp_registration_url() . '">' . __( 'Sign Up' ) . '</a></li>';
 }
 
 return $items;
}
 
add_filter( 'wp_nav_menu_items', 'add_login_logout_register_menu', 199, 2 );

function restrictly_get_current_user_role() {
  if( is_user_logged_in() ) {
    $user = wp_get_current_user();
    $role = ( array ) $user->roles;
    return $role[0];
  } else {
    return false;
  }
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