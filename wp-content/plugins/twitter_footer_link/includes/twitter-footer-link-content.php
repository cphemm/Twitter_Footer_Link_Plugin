<?php

function tfl_add_footer($content){

	global $tfl_options;

	$footer_output = '<hr>';
	$footer_output .= '<div class="footer_content">';
	$footer_output .= '<span class="dashicons dashicons-twitter"></span> Find Me On <a style="color:' . $tfl_options['link_color'] . '" target="_blank" href="' . $tfl_options['facebook_url'] . '">Twitter</a>';
	$footer_output .= '</div>';

	if($tfl_options['show_in_feed']){
		if(is_single() || is_home() && $tfl_options['enable']){
			return $content . $footer_output;
		}
	} else {
		if( is_single() && $tfl_options['enable']){
			return $content . $footer_output;
		}
	}

	return $content;

}

add_filter('the_content', 'tfl_add_footer' );