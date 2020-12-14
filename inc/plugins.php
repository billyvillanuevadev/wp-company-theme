<?php 
/**
 * Plugin Hooks
 */

/**
 * ACF: Remove the update notification for ACF Pro
 */
function xbv_acf_remove_update_notif($value) {
 unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
 return $value;
}
add_filter('site_transient_update_plugins', 'xbv_acf_remove_update_notif');