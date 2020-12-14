<?php

/**
 * Register script files and variables
 */
function xbv_ajax_scripts() {  
  //* For Ajax / Load more
  global $wp_query; 
  wp_register_script( 'xbv_ajax', get_stylesheet_directory_uri() . '/assets/scripts/ajax.js', array('jquery'), rand(10,1000), 1 );
 
  // Variables for Load more
  wp_localize_script( 'xbv_ajax', 'xbv_default_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php' // WordPress AJAX
  ) );

  // Variables for Load more
  wp_localize_script( 'xbv_ajax', 'xbv_loadmore_params', array(
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
    'posts' => json_encode( $wp_query->query_vars ), // Loop variables
    'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages
  ) );

  wp_enqueue_script( 'xbv_ajax' );
  //* End Ajax / Load more
}
add_action( 'wp_enqueue_scripts', 'xbv_ajax_scripts' );

/**
 * Ajax Handler: Load more function
 */
function xbv_loadmore_ajax_handler() {
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page'] + 1; // we need next page to be loaded
	$args['post_status'] = 'publish';
 
	query_posts( $args );

	if( have_posts() ) :
		while( have_posts() ): the_post();
			get_template_part( 'template-parts/archive/content', get_post_type() );
		endwhile;
	endif;
  die;
}
add_action('wp_ajax_loadmore', 'xbv_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'xbv_loadmore_ajax_handler');