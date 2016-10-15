<?php
/**
 * Plugin Name: Twitter Footer Link
 * Description: Adds a Twitter profile link to the end of posts
 * Version: 1.0
 * Author: Carolyn Hemmings
 *
 **/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Global Options Variable
$tfl_options = get_option('tfl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/twitter-footer-link-scripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/twitter-footer-link-content.php');

if(is_admin()){
	// Load Settings
	require_once(plugin_dir_path(__FILE__).'/includes/twitter-footer-link-settings.php');
}