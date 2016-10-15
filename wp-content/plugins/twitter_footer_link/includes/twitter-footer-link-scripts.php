<?php

// Add Scripts
function tfl_add_scripts(){
	wp_enqueue_style('tfl-main-style', plugins_url() . '/twitter-footer-link/css/style.css');
	wp_enqueue_script('tfl-main-script', plugins_url() . '/twitter-footer-link/js/main.js');
}

add_action('wp_enqueue_scripts', 'tfl_add_scripts' );