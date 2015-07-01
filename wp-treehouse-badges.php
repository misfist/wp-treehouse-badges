<?php
/*
 *	Plugin Name: Official Treehouse Badges Plugin
 *	Plugin URI: http://patricia-lutz.com
 *	Description: Provides both widgets and shortcodes to help you display your Treehouse profile badges on your website.  The official Treehouse badges plugin.
 *	Version: 1.0
 *	Author: Pea
 *	Author URI: http://misfist.com
 *	License: GPL2
 *
*/

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

	require( 'inc/options-page-wrapper.php' );

}


?>