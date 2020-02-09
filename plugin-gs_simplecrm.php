<?
/*
* Plugin Name: go-source Simple CRM
*
* Wordpress plugin  / all files and classes are named gs_simplecrm 
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
* Check the gs-documentation.php in gsclasses folder for adittional documentation
*/

//exit if accessed directly
if (!defined('WPINC')) { exit; }

// This global informs gs_classes to switch function return to WP or Joomla standard
$gs_global = 'wp';

/*
	---------- all component setings, parameters and properties end here ---------- ------- -------
 
 * Instanciate Go-Source class to construct all references
 */
 
if( $gs_global == 'wp' ) { require plugin_dir_path( __FILE__ ) . 'gsclasses/gs_class_component.php'; }
 
/*
* This function sets component properties, using a function to protect the variables
* $component array carries the properties to instanciate the component
* __construct() receives the properties trough this array
*/
function gs_prepare_component(){
 	$component_array = array(
 					'name' 	=> 'Simple CRM',	
 					'codename'	=> 'gs_simplecrm',
 					'cms'		=> $gs_global,
	 				'version'			=> '2.0.0',
	 				'copyright_year'	=> '2020',
		 			'allow_backend'		=> 1,
		 			'allow_frontend'	=> 1,
		 			'allow_download'	=> 1,
		 			'allow_upload'		=> 1,
		 			'load_gs_classes'	=> 1,
		 			'plugin_dir'		=> plugin_dir_path( __FILE__ )
	 				);	 				
	 	return $component_array;
	}
	$gsComponent = new gsComponent( gs_prepare_component() ); 
 
/*
	 ----------  all setings, parameters and component properties end here ---------- ------- -------
	       ----         only WP instructions from this line down           ------
*/
 define( 'GS_SIMPLECRM_NAME', $gsComponent->name() );
 define( 'GS_SIMPLECRM_CODENAME', $gsComponent->codename() );
 define( 'GS_SIMPLECRM_VERSION', $gsComponent->version() );

//require all wp plugin classes from /includes

function require_plugin_classes(){
	
	//read file names
	$requires = scandir( plugin_dir_path( __FILE__ ) . 'includes/' );
	
	//loop to require, install classes
	foreach ( $requires as $require ) {
		
			//8 is the lenght of class-gs; check if the file is class-gs before loading
			if(  substr($require, 0, 8) == 'class-gs' ) { 
				
				//include the file
				require_once plugin_dir_path( __FILE__ ) . 'includes/'.$require;	
			}
	}
}
require_plugin_classes();

//require all go-source classes for this plugin

function require_gs_classes() {
			
	//read file names
	$requires = scandir( plugin_dir_path( __FILE__ ) . 'gsclasses/' );
			
	//loop to require, install classes
	foreach ( $requires as $require ) {
				
			//8 is the lenght of class-gs; check if the file is class-gs before loading
			if(  substr($require, 0, 8) == 'gs_class' ) { 
						
				//include the file
				require_once plugin_dir_path( __FILE__ ) . 'gsclasses/'.$require;	
			}
	}
}
require_gs_classes();

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
register_activation_hook( __FILE__, 'activate_'.$gsComponent->codename() );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
register_deactivation_hook( __FILE__, 'deactivate_'.$gsComponent->codename() );

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
 * gs_simplecrm_options_page() sets the admin page according to Admin Menu standard.
	add_menu_page(
	    string $page_title,
	    string $menu_title,
	    string $capability,
	    string $menu_slug,
	    callable $function = '',
	    string $icon_url = '',
	    int $position = null
	    position 
	);
 *
 * @since    2.0.0
 */
	function gs_admin_page() {
		$gs_admin_page_title = __( 'GS Simple CRM Config', GS_SIMPLECRM_CODENAME );
		$gs_admin_menu_title = __( 'Simple CRM Cfg', GS_SIMPLECRM_CODENAME );
		
	    add_menu_page(
	        $gs_admin_page_title,
	        $gs_admin_menu_title,
	        'manage_options',
	        plugin_dir_path(__FILE__) . 'admin/view/'.GS_SIMPLECRM_CODENAME.'-admin-view.php', 
	        null,
	        plugin_dir_url(__FILE__) . 'images/gs_wp_admin_menu_icon.png',
	        20
	    );
	}
	add_action( 'admin_menu', 'gs_admin_page' );

