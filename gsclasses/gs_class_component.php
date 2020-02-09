<?php
	
/*
* This is the main go-source class.
*
* Defines the component or plugin properties (and configuration)
* 
* @Version 2.0.0
* @copyright  2020 Pedro Bicudo Maschio
* @license    GNU General Public License version 2 or later; see LICENSE.txt 
* 
* Framework by go-source.com / pmoft.com
* Contact: bicudomaschio@gmail.com
* 
*/
global $gs_global;

 
Class gsComponent {
	
	//the literal name for human reading, example: Simple CRM
	protected $name; 
	
	//the component or plugin system name, example: gs_simplecrm
	protected $codename;
	
	//the CMS hosting system, Wordpress or Joomla
	protected $cms;
	
	//component parameters
	protected $version;
	protected $copyright_year;
	protected $allow_backend;
	protected $allow_frontend;
	protected $allow_download;
	protected $allow_upload;
	protected $load_gs_classes;
	protected $plugin_dir;
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @param array $component_array (default: array()) -> must have all properties!
	 * @return void
	 */
	public function __construct ( $component_array = array() ) {
		
		$this->name				= $component_array['name']; 		
		$this->codename			= $component_array['codename'];
		$this->cms 				= $component_array['cms'];
	 	$this->version			= $component_array['version'];
	 	$this->copyright_year	= $component_array['copyright_year'];
		$this->allow_backend	= $component_array['allow_backend'];
		$this->allow_frontend	= $component_array['allow_frontend'];
		$this->allow_download	= $component_array['allow_download'];
		$this->allow_upload		= $component_array['allow_upload'];
		$this->load_gs_classes	= $component_array['load_gs_classes'];
		$this->plugin_dir		= $component_array['plugin_dir'];		
		
		}
	
	// functions to retrieve the component properties
		
	public function name(){
		return $this->name;
		}
	public function codename(){
		return $this->codename;
		}
	public function version(){
		return $this->version;
		}
	public function copyright_year(){
		return $this->copyright_year;
		}
	public function allow_backend(){
		return $this->allow_backend	;
		}
	public function allow_frontend(){
		return $this->allow_frontend;
		}
	public function allow_download(){
		return $this->allow_download;
		}
	public function allow_upload(){
		return $this->allow_upload;
		}
	public function load_gs_classes(){
		return $this->load_gs_classes;
		}
	public function plugin_dir(){
		return $this->plugin_dir;
		}
		
}
	

	
