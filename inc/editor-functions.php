<?php
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );
function my_mce_buttons_2( $buttons ) {
	//echo '<pre>';print_r($buttons);echo '</pre>';
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );
function my_mce_before_init( $settings ) {

    $style_formats = array(
    	array(
    		'title' => 'Lead',
    		'selector' => 'p',
    		'classes' => 'lead'
    	),
    	array(
    		'title' => 'Bordered bullets',
    		'selector' => 'ul',
    		'classes' => 'bordered'
    	)
    );

    $settings['style_formats'] = json_encode( $style_formats );

    return $settings;
    
    add_editor_style();

}

add_action( 'after_setup_theme', 'editor_styles' );

function editor_styles() {
add_editor_style(get_template_directory_uri().'/custom-editor-style.css?v='.filemtime( get_template_directory().'/custom-editor-style.css' ) );	
}

?>