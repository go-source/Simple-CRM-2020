<?
/*
* Plugin Name: go-source Simple CRM
*
* all files and classes are named gs_simplecrm
*
* @Version:          2.0.0
* Requires PHP:      7.0 and above
* Requires at least: 5.3 (WP)
* At least Joompla   4.0
* Author:            go-source
* 
* Description: Simple CRM has all functions for sales pipeline management. It is free and easy to extend. Our purpose is to translate complexity into knowledge that is shared to promote social wealth, though systems that are easy to use. Simple-CRM makes our sales knowledge available to you.
* 
* Author URI:  https://pmoft.com
* Plugin URI:  https://go-source.com
* Text Domain: gs_simplecrm-basics-plugin
* Domain Path: /languages
* 
* Joomla Header
* @package    com_gs_simplecrm
* @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
* @copyright  2020 Pedro Bicudo Maschio
* @license    GNU General Public License version 2 or later; see LICENSE.txt 
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*
* Extending Simple CRM for Wordpress, please read
* https://developer.wordpress.org/plugins/plugin-basics/
* https://codex.wordpress.org/Plugin_API
*
* Readme file has simplified instructions on how to use
* Check the gs-simplecrm-doc.php in the plugin folder for system documentation
* 
*/

// To switch code from WP or J!, a global variable is set herein
$gs_global = 'wp';

//exit if accessed directly
if( $gs_global == 'wp' ){ 
	if (!defined('WPINC')) { exit; }
} else { defined('_JEXEC') or die; }

/**
 * Currently plugin version.
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GS_SIMPLECRM_VERSION', '2.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_gs_simplecrm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gs_simplecrm-activator.php';
	Gs_simplecrm_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_gs_simplecrm() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gs_simplecrm-deactivator.php';
	Gs_simplecrm_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gs_simplecrm' );
register_deactivation_hook( __FILE__, 'deactivate_gs_simplecrm' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gs_simplecrm.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.0.0
 */
function run_gs_simplecrm() {

	$plugin = new Gs_simplecrm();
	$plugin->run();

}
run_gs_simplecrm();

/**
 * Sets de Admin Menu.
	add_menu_page(
	    string $page_title,
	    string $menu_title,
	    string $capability,
	    string $menu_slug,
	    callable $function = '',
	    string $icon_url = '',
	    int $position = null
	);
 *
 * @since    2.0.0
 */
	function gs_simplecrm_options_page() {
	    add_menu_page(
	        'GS Simple CRM Config',
	        'Simple CRM Cfg',
	        'manage_options',
	        plugin_dir_path(__FILE__) . 'admin/partials/gs_simplecrm-admin-display.php',
	        null,
	        plugin_dir_url(__FILE__) . 'images/gs_icon.png',
	        20
	    );
	}
	add_action( 'admin_menu', 'gs_simplecrm_options_page' );

