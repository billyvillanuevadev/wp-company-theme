<?php
/**
 * Add a Custom Options Page
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Website Settings',
		'menu_title'	=> 'Website Settings',
		'menu_slug' 	=> 'website-settings'
	));
}

/** 
 * Hide/Show Admin Menu Items 
 * */
function xbv_remove_default_post_type() {  
  // Hide Other admin pages
  remove_menu_page('edit-comments.php');
  remove_menu_page('appearance.php');
  // remove_menu_page('edit.php?post_type=acf-field-group');
}
add_action('admin_menu','xbv_remove_default_post_type');

// Test