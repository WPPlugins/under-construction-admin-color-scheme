<?php
/*
Plugin Name: Admin Color Scheme: Under Construction
Plugin URI: http://seanlindsay.wordpress.com
Description: Customised Admin color scheme for those of us who were designing websites in the mid-90s :)
Author: Sean Lindsay
Version: 0.1
Author URI: http://seanlindsay.wordpress.com
*/

add_action('admin_init','custom_admin_underconstruction');

function custom_admin_underconstruction() {
	$plugin_url = get_option( 'siteurl' ) . '/wp-content/plugins/' . plugin_basename(dirname(__FILE__)) ;
	wp_admin_css_color(
		'underconstruction',
		__('Under Construction'),
		$plugin_url . '/underconstruction.css',
		array(
			'#FFFF00',
			'#000000',
			'#666666',
			'#666666;background: url('.$plugin_url.'/stripesmall.png)'
	)
);
}
?>
