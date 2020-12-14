<?php

/**
 * Custom Function for printing nav with custom classes
 */
function xbv_get_menu($menu_name, $ul_class='', $li_class='', $a_class='', $slice_start='', $slice_total='') {
  
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
		$menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menu_list = '';
    
    if ( $menu_name == 'footer-1' || $menu_name == 'footer-2' ) {
      $menu_list .= '<h4>'. $menu->name .'</h4>';
    }

    $menu_list .= "\t\t\t\t". '<ul class="'.$ul_class.'">' ."\n";

    if ( !empty($slice_total) ) {
      $menu_items = array_slice($menu_items, $slice_start, $slice_total);
    }

		foreach ((array) $menu_items as $key => $menu_item) {
			$title = $menu_item->title;
      $url = $menu_item->url;

      if ( ! is_front_page() && ( $menu_name=='menu-1' || $menu_name == 'footer-1' ) ) {
        if( strpos($url, '#') !== false ) {
          $url = get_home_url() .'/'. $url;
        }
      }

      $icon = '';
      if ( 'chevron-icon'==$li_class ) {
        $icon = '<i class="fas fa-chevron-right"></i> ';
      }

			$menu_list .= "\t\t\t\t\t". '<li class="'.$li_class.'">'.$icon.'<a class="'.$menu_class.' '.$a_class.'" href="'. $url .'">'. $title .'</a></li>' ."\n";
		}
		$menu_list .= "\t\t\t\t". '</ul>' ."\n";
	} else {
		$menu_list = '<!-- no list defined -->';
  }
  
	return $menu_list;
}

/**
 * Get posts
 */
function xbv_get_posts( $post_type = 'post', $numberposts = -1, $exclude = array() ) {

  $args = array(
    'post_type'   => $post_type,
    'numberposts' => $numberposts,
    'orderby'     => 'menu_order',
    'order'       => 'ASC', 
    'exclude'     => $exclude
  );
  $posts = get_posts( $args );

  return $posts;
}

/**
 * Create absolute URL to assets folder
 */
function assets_path( $url ) {
  return bloginfo('template_url') . '/assets/' . $url;
}