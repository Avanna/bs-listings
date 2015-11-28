<?php
/*
Plugin Name: BS Listings
Plugin URI:  http://buysellroutes.com
Description: A plugin for custom listing post type
Version:     1.0
Author:      Konverge Studios
Author URI:  http://www.konvergestudios.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset
*/

if(!defined( 'WPINC' )) {
	die;
}

function activate_bs_listings() {
	require_once plugin_dir_path(__FILE__) . 'includes/class-bs-listings-activator.php';
	BS_Listings_Activator::activate();
}

function deactivate_bs_listings() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bs-listings-deactivator.php';
	BS_Listings_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_bs_listings');
register_deactivation_hook( __FILE__, 'deactivate_bs_listings');

require plugin_dir_path(__FILE__) . 'includes/class-bs-listings.php';

function run_bs_listings() {
	$plugin = new BS_Listings();
	$plugin->run();
}

// run the plugin
run_bs_listings();

?>