<?php
function bhn_scripts() {

	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', null, '4.0.0', 'screen' );
	wp_enqueue_style( 'fontawesome-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', null, '4.7.0', 'screen' );
	wp_enqueue_style( 'animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css', null, '3.7.0', 'screen' );
	
	
	if (!wp_is_mobile()) {
	wp_enqueue_style( 'bhn-style', get_stylesheet_directory_uri() . '/assets/css/styles.css', null,  filemtime( get_stylesheet_directory().'/assets/css/styles.css' ), 'screen'  );
	}
	//Scripts
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', null, '2.8.3', false );
	wp_enqueue_script( 'jquery-slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', null, '3.2.1', true );
	wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery-slim'), '1.12.9', true );
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery-slim'), '4.0.0', true );
	if (!wp_is_mobile()) {
	wp_enqueue_script( 'bhn-script', get_stylesheet_directory_uri() . '/assets/js/functions-min.js', array( 'jquery-slim' ), filemtime( get_stylesheet_directory().'/assets/js/functions-min.js' ), true );
	}
}
add_action( 'wp_enqueue_scripts', 'bhn_scripts' );	
?>