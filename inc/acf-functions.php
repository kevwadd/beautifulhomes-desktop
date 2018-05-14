<?php
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	
	acf_add_options_sub_page('Global');
	acf_add_options_sub_page('Home page');
	acf_add_options_sub_page('Team');
	acf_add_options_sub_page('Magazines');
	
}	
?>