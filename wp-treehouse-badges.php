<?php
/*
 *	Plugin Name: Unofficial Treehouse Badges Plugin
 *	Plugin URI: http://patricia-lutz.com
 *	Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website.  The official Treehouse badges plugin.
 *	Version: 1.0
 *	Author: Pea
 *	Author URI: http://misfist.com
 *	License: GPL2
 *
*/

/*
 * Assign global variables
 */

$plugin_url =  WP_PLUGIN_URL . '/wp-treehouse-badges';

/*
 * Link to plugins settings in Settings > Treehouse Badges
 */

function wptreehouse_badges_menu() {

	/*
	 * Use add_options_page function to add menu item
	 * add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function )
	 */

	add_options_page(
		__( 'Treehouse Badges Page', 'wptreehouse-badges' ),
		__( 'Treehouse Badges', 'wptreehouse-badges' ),
		'manage_options',
		'wptreehouse_badges',
		'wptreehouse_badges_options_page'
	);
}

add_action( 'admin_menu', 'wptreehouse_badges_menu' );

/*
 * Create settings page
 */

function wptreehouse_badges_options_page() {

	/*
	 * Check user has permission `manage_options`
	 */

	if( !current_user_can( 'manage_options' ) ) {

		wp_die( 'You do not have sufficient permissions to access.' );

	}

	/*
	 * Declare global variable to make available to required file
	 */

	global $plugin_url;

	require( 'inc/options-page-wrapper.php' );

}

/*
 * Create settings page
 */

function wptreehouse_badges_styles() {
	wp_enqueue_style( 'wptreehouse_badges_styles', plugins_url( 'wp-treehouse-badges/css/style.css' ) );
}

add_action( 'admin_head', 'wptreehouse_badges_styles' );


?>