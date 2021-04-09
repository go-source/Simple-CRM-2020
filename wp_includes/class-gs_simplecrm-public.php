<?php

/**
 * The public-facing functionality of the plugin.
 *
 * Plugin Name: go-source Simple CRM
 * Wordpress plugin
 *
 * @package    gs_simplecrm
 * @subpackage gs_simplecrm/admin
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @since      2.0.0
 */
class Gs_simplecrm_Public {

	//the instance name of this view
	protected $gs_view_name;
	
	//access rights according to bead class; tells what an user can do
	protected $gs_view_beads;
	
	//the page user group: tells what the user can see.
	protected $gs_view_group;
	
	/*
	* You can add more types. Defined view types: 
	* input		-> form, input one record
	* sheet		-> input multi-lines, many records, like a spreadsheet or table
	* show		-> show one record data
	* list		-> many records listed in a table, ore record per line
	* download	-> download page or API
	* upload	-> upload page or API
	* pdf		-> pdf page output
	*/
	protected $gs_view_type;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    2.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct ( $view_parameters_array = array() ) {

		//flag $e indicates the array is not empty
		$e = !empty( $view_parameters_array );

		//load default values if array is missing some keys

		$this->gs_view_name		= $e && isset($view_parameters_array['view_name']) ? $view_parameters_array['view_name'] 	: 'Default View';	
		$this->gs_view_beads 	= $e && isset($view_parameters_array['view_beads']) ? $view_parameters_array['view_beads'] 	: array(0);
		$this->gs_view_group  	= $e && isset($view_parameters_array['view_group']) ? $view_parameters_array['view_group'] 	: array(0);
		$this->gs_view_type		= $e && isset($view_parameters_array['view_type']) ? $view_parameters_array['view_type'] 	: 'show';
	}
	
	function gs_view_name() {
		return $this->gs_view_name;
	}
	function gs_view_who_can_do() {
		return $this->gs_view_beads;
	}
	function gs_view_who_can_see() {
		return $this->gs_view_group;
	}
	function gs_view_type() {
		return $this->gs_view_type;
	}
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( GS_SIMPLECRM_CODENAME, plugin_dir_url( __FILE__ ) . 'css/'.GS_SIMPLECRM_CODENAME.'-public.css', array(), GS_SIMPLECRM_VERSION, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    2.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( GS_SIMPLECRM_CODENAME, plugin_dir_url( __FILE__ ) . 'js/'.GS_SIMPLECRM_CODENAME.'-public.js', array( 'jquery' ), GS_SIMPLECRM_VERSION, false );

	}
}
