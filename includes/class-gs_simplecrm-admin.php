<?php

/**
 * Plugin Name: go-source Simple CRM
 * Wordpress plugin
 *
 * @package    gs_simplecrm
 * @subpackage gs_simplecrm/admin
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @since      2.0.0
 */
class Gs_simplecrm_Admin {
	
	protected $gs_admin_view_name;

	public function __construct() {
		$this->gs_admin_view_name = GS_SIMPLECRM_NAME.'-admin';
		$this->enqueue_styles();
		$this->enqueue_scripts();
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( GS_SIMPLECRM_NAME, plugin_dir_url( __FILE__ ) . 'css/gs_simplecrm-admin.css', array(), GS_SIMPLECRM_VERSION, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( GS_SIMPLECRM_NAME, plugin_dir_url( __FILE__ ) . 'js/gs_simplecrm-admin.js', array( 'jquery' ), GS_SIMPLECRM_VERSION, false );

	}
	
	/**
	 * gs_simplecrm_admin_view_data function. Load data for the config view
	 * 
	 * @access public
	 * @return void
	 */
	function gs_simplecrm_admin_view_data() {
		$config_array = array();
		$data_array = array();
	}

}
