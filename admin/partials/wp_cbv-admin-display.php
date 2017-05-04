<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       www.fantasyhomeland.com
 * @since      1.0.0
 *
 * @package    Wp_cbv
 * @subpackage Wp_cbv/admin/partials
 */
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">
	<h2><?php echo esc_html(get_admin_page_title())?></h2>
	<form method="post" name="cleanup_options" action="options.php">
	<?php settings_fields($this->plugin_name); ?>
	<fieldset>
		<legend class="screen-reader-text"><span>Clean Wordpress head section</span></legend>
		<label for="<?php echo $this->plugin_name;?>-cleanup">
			<input type="checkbox" id="<?php echo $this->plugin_name; ?>-cleanup" 
			name="<?php echo $this->plugin_name; ?> [cleanup]" value="1"/>
			<span><?php esc_attr_e('Clean up the head section', $this->plugin_name);?></span>
		</label>
	</fieldset>
	<fieldset>
		<legend class="screen-reader-text"><span>Remove Injected CSS for comment widget</span></legend>
		<label for="<?php echo $this->plugin_name; ?><comments_css_cleanup">
			<input type="checkbox" id="<?php echo $this->plugin_name; ?>-comments_css_cleanup" name="<?php echo $this->plugin_name; ?>[comments_css_cleanup]" value="1"/>
			<span><?php esc_attr_e('Remove Injected CSS for comment widget', $this->plugin_name); ?></span>
		</label>
	</fieldset>
	<fieldset>
		<legend class="screen-reader-text"><span>Remove Injected CSS for galleries</span><</legend>
		<label for="<?php echo $this->plugin_name; ?>-gallery_css_cleanup">
		<input type="checkbox" id="<?php echo $this->plugin_name; ?>-gallery_css_cleanup" name="<?php echo $this->plugin_name; ?>[gallery_css_cleanup]" value="1">
		<span><?php esc_attr_e('Remove Injected CSS for galleries', $this->plugin_name); ?></span>
		</label>
	</fieldset>
		<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Add Post, page or product slug to body class', $this->plugin_name); ?></span><</legend>
		<label for="<?php echo $this->plugin_name; ?>-body_class_slug">
		<input type="checkbox" id="<?php echo $this->plugin_name; ?>-body_class_slug" name="<?php echo $this->plugin_name; ?>[body_class_slug]" value="1">
		<span><?php esc_attr_e('Add post slug to body class', $this->plugin_name); ?></span>
		</label>
	</fieldset>
		</fieldset>
		<fieldset>
		<legend class="screen-reader-text"><span><?php _e('Load jQuery from CDN instead of the basic wp script', $this->plugin_name); ?></span><</legend>
		<label for="<?php echo $this->plugin_name; ?>-jquery_cdn">
		<input type="checkbox" id="<?php echo $this->plugin_name; ?>-jquery_cdn" name="<?php echo $this->plugin_name; ?>[jquery_cdn]" value="1">
		<span><?php esc_attr_e('Load jQuery from CDN', $this->plugin_name); ?></span>
			<fieldset>
				<p>You can choose your own provider & jQuery</p>
				<legend class="screen-reader-text"><span><?php _e('Choose your prefered cdn provider', $this->plugin_name); ?></span></legend>
				<input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>
				cdn_provider" name="<?php echo $this->plugin_name; ?>[cdn_provider]" value="">
			</fieldset>
		</label>
	</fieldset>
	<?php submit_button('Save all changes', 'primary','submit', TRUE); ?>
	</form>
</div>