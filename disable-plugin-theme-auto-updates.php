<?php
/**
 * Plugin Name:     Disable Automatic Theme & Plugin Updates
 * Plugin URI:      https://github.com/whyisjake/disable-automatic-updates
 * Description:     Simply disable automatic theme and plugin updates that are part of WordPress 5.5.
 * Author:          Jake Spurlock
 * Author URI:      https://jakespurlock.com
 * Text Domain:     disable-plugin-theme-auto-updates
 * Domain Path:     /languages
 * Version:         0.1.6
 *
 * @package Disable_Plugin_Theme_Auto_Updates
 */

add_filter( 'plugins_auto_update_enabled', '__return_false' );
add_filter( 'themes_auto_update_enabled', '__return_false' );
