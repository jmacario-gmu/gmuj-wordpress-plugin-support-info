<?php

/**
 * Plugin Name:       Mason WordPress: Support Info
 * Plugin URI:        https://github.com/jmacario-gmu/gmuj-wordpress-plugin-support-info
 * Description:       Mason WordPress plugin which adds additional support information to the WordPress dashboard.
 * Version:           0.0.1
 */

// Exit if this file is not called directly.
	if (!defined('WPINC')) {
		die;
	}

// Add custom dashboard content

  // Add meta boxes
  add_action('wp_dashboard_setup', 'gmuj_custom_dashboard_meta_boxes');
  function gmuj_custom_dashboard_meta_boxes() {
    // Adds custom WordPress dashboard content boxes

    global $wp_meta_boxes;
    
    // 'theme info' meta box
    add_meta_box("gmuj_custom_dashboard_meta_box_theme_info", "Mason WordPress Theme Info", "gmuj_custom_dashboard_meta_box_theme_info", "dashboard","side");

     /* 'theme support' meta box */
    add_meta_box("gmuj_custom_dashboard_meta_box_theme_support", "Mason WordPress Theme Support", "gmuj_custom_dashboard_meta_box_theme_support", "dashboard","normal");

    /* 'Mason resources' meta box */
    add_meta_box("gmuj_custom_dashboard_meta_box_mason_resources", "Mason Resources", "gmuj_custom_dashboard_meta_box_mason_resources", "dashboard","normal");

  }

  /* WordPress dashboard meta box content: theme info */
  function gmuj_custom_dashboard_meta_box_theme_info()
  {
      include('content/theme_info.html');
  }

  /* WordPress dashboard meta box content: theme support */
  function gmuj_custom_dashboard_meta_box_theme_support() {
      include('content/theme_support.html');

  }

  /* WordPress dashboard meta box content: Mason resources */
  function gmuj_custom_dashboard_meta_box_mason_resources() {
      include('content/mason_resources.html');
  }

  // Customize admin dashboard footer
    add_filter('admin_footer_text', 'gmuj_replace_footer_admin');
    function gmuj_replace_footer_admin() {
      include('content/admin_footer.html');
    }