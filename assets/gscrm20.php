<?php
/**
 * @version    CVS: 2.0.0
 * @package    Com_Gscrm20
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @copyright  2021 Pedro Bicudo Maschio
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Load the gs_class_component located at JPATH_COMPONENT_SITE/gsclasses
//JLoader::registerPrefix('gsclasses', JPATH_COMPONENT_SITE);
//JLoader::register('gsComponent', JPATH_COMPONENT_SITE . 'gsclasses/gs_class_component.php');

// Identity; instanciate this component
 	$component_array = array(
 					'name' 	            => 'Simple CRM',	
 					'codename'	        => 'Gscrm20',
 					'cms'		        => 'j4',
	 				'version'			=> '2.0.0',
	 				'copyright_year'	=> '2021',
		 			'allow_backend'		=> 1,
		 			'allow_frontend'	=> 1,
		 			'allow_download'	=> 1,
		 			'allow_upload'		=> 1,
		 			'load_gs_classes'	=> 1,
		 			'plugin_dir'		=> ''
	 				);	 				
//	$gsComponent = new gsComponent( $component_array );

// Get an instance of the controller prefixed by the component name set above
$controller = JControllerLegacy::getInstance('Gscrm20');

// Perform the Request task. If no task is set, the default task 'display' will be assumed.
// When display is used, the 'view' variable will decide what will be displayed.
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller.
// redirect usually happens after a task like 'save' has been completed.
$controller->redirect();