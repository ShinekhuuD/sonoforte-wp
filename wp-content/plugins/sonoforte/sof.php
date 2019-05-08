<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://enkomion.com
 * @since             1.0.0
 * @package           Sof
 *
 * @wordpress-plugin
 * Plugin Name:       Sonoforte
 * Plugin URI:        https://github.com/ShinekhuuD/sonoforte
 * Description:       This plugin contains specific functions for Sonoforte.com
 * Version:           1.0.9
 * Author:            Enkomion
 * Author URI:        https://enkomion.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sof
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/ShinekhuuD/sonoforte
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'SOF_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sof-activator.php
 */
function activate_sof() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sof-activator.php';
	Sof_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sof-deactivator.php
 */
function deactivate_sof() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sof-deactivator.php';
	Sof_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sof' );
register_deactivation_hook( __FILE__, 'deactivate_sof' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sof.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sof() {

	$plugin = new Sof();
	$plugin->run();

}
run_sof();
