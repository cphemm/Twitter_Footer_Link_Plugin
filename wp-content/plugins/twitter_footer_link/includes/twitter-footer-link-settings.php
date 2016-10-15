<?php

// Create menu Link
function tfl_options_menu_link(){
	add_options_page(
		'Twitter Footer Link Options',
		'Twitter Footer Link',
		'manage_options',
		'tfl-options',
		'tfl_options_content'
	);
}

// Create Options Page Content
function tfl_options_content(){

	// Init Options Global
	global $tfl_options;

	ob_start(); ?>
	<div class="wrap">
		<h2><?php _e('Twitter Footer Link Settings', 'tfl_domain'); ?></h2>
		<p><?php _e('Settings for the Twitter Footer Link plugin', 'tfl_domain'); ?></p>
		<form method="post" action="options.php">
			<?php settings_fields('tfl_settings_group'); ?>
			<table class="form-table">
				<tbody>
				<tr>
					<th scope="row"><label for="tfl_settings[enable]"><?php _e('Enable','tfl_domain'); ?></label></th>
					<td><input name="tfl_settings[enable]" type="checkbox" id="tfl_settings[enable]" value="1" <?php checked('1', $tfl_options['enable']); ?></td>
				</tr>
				<tr>
					<th scope="row"><label for="tfl_settings[twitter_url]"><?php _e('Twitter Profile URL','tfl_domain'); ?></label></th>
					<td><input name="tfl_settings[twitter_url]" type="text" id="tfl_settings[twitter_url]" value="<?php echo $tfl_options['twitter_url']; ?>" class="regular-text">
						<p class="description"><?php _e('Enter your Twitter profile URL', 'tfl_domain'); ?></p></td>
				</tr>

				<tr>
					<th scope="row"><label for="tfl_settings[link_color]"><?php _e('Link Color','tfl_domain'); ?></label></th>
					<td><input name="tfl_settings[link_color]" type="text" id="tfl_settings[link_color]" value="<?php echo $tfl_options['link_color']; ?>" class="regular-text">
						<p class="description"><?php _e('Enter a color or HEX value with a #', 'tfl_domain'); ?></p></td>
				</tr>

				<tr>
					<th scope="row"><label for="tfl_settings[show_in_feed]"><?php _e('Show In Posts Feed','tfl_domain'); ?></label></th>
					<td><input name="tfl_settings[show_in_feed]" type="checkbox" id="tfl_settings[show_in_feed]" value="1" <?php checked('1', $tfl_options['show_in_feed']); ?></td>
				</tr>
				</tbody>
			</table>
			<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="<?php _e('Save Changes', 'tfl_domain'); ?>"</p>
		</form>
	</div>
	<?php
	echo ob_get_clean();
}

add_action('admin_menu', 'tfl_options_menu_link' );

// Register Settings
function tfl_register_settings(){
	register_setting('tfl_settings_group', 'tfl_settings');
}

add_action('admin_init', 'tfl_register_settings' );