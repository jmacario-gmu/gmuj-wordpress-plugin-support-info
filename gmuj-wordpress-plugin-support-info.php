<?php

/**
 * Summary: Main plugin file for the Mason WordPress: Mason Support Information plugin
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */

/**
 * Plugin Name:       Mason WordPress: Support Info
 * Author:            Jan Macario
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-support-info
 * Description:       Mason WordPress plugin which adds additional support information to the WordPress dashboard.
 * Version:           0.0.1
 */


// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}


/**
 * Summary: Add meta boxes to WordPress admin dashboard
 * Description: The meta box content comes from the functions listed in the add_meta_box function calls, and are below.
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */
add_action('wp_dashboard_setup', 'gmuj_custom_dashboard_meta_boxes');
function gmuj_custom_dashboard_meta_boxes() {

  // Declare global variables
  global $wp_meta_boxes;

  // Adds custom WordPress dashboard content boxes

  // Add 'theme info' meta box
  add_meta_box("gmuj_custom_dashboard_meta_box_theme_info", "Mason WordPress Theme Info", "gmuj_custom_dashboard_meta_box_theme_info", "dashboard","side");

   /* Add 'theme support' meta box */
  add_meta_box("gmuj_custom_dashboard_meta_box_theme_support", "Mason WordPress Theme Support", "gmuj_custom_dashboard_meta_box_theme_support", "dashboard","normal");

  /* Add 'Mason resources' meta box */
  add_meta_box("gmuj_custom_dashboard_meta_box_mason_resources", "Mason Resources", "gmuj_custom_dashboard_meta_box_mason_resources", "dashboard","normal");

}

/**
 * Summary: Provides content for the WordPress 'theme info' meta box
 * Description: 
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */
function gmuj_custom_dashboard_meta_box_theme_info()
{

  //Include HTML content from file
  include('content/theme_info.html');

}

/**
 * Summary: Provides content for the WordPress 'theme support' meta box
 * Description: 
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */
function gmuj_custom_dashboard_meta_box_theme_support() {

  //Include HTML content from file
  include('content/theme_support.html');

}

/**
 * Summary: Provides content for the WordPress 'Mason resources' meta box
 * Description: 
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */
function gmuj_custom_dashboard_meta_box_mason_resources() {

  //Include HTML content from file
  include('content/mason_resources.html');

}

/**
 * Summary: Provides content for the admin dashboard footer message
 * Description: 
 * Last modified: 2020-06-04
 * Modified by: Jan Macario
 */
add_filter('admin_footer_text', 'gmuj_replace_footer_admin');
function gmuj_replace_footer_admin() {

  //Include HTML content from file
  include('content/admin_footer.html');

}