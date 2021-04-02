<?
/*
* @Version: 2.0.0
* version number applies to both Wordpress plug-in and Joomla component or package
* Requires PHP: 7.1 and above
* Requires at least: 5.2 (WP)
* At least Joompla 4.0
* 
* Description: Helper class; language switch allows for updating CMS methods. This class handles translation and text/strings methods.
*
*  To switch code from WP or J!, $gs_global = 'wp' or = 'j4' is used in switch classes and output views
 - wp for Wordpress version 5.3 and above; __( 'Blog Options', 'my-plugin' );
 - J4 for Joomla! version 4.0 and above;  JText::_('TRANSLATABLE_STRING');
*
* @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
* @copyright  2020 Pedro Bicudo Maschio
* @license    GNU General Public License version 2 or later; see LICENSE.txt 
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
global $gs_global;

if( $gs_global == 'wp' ){ 
	if (!defined('WPINC')) { exit; }
} else { defined('_JEXEC') or die; }


class gsLanguage {
	
	protected $lang_name;
	
	public function __construct($lan = "") {
		
		if( $lan == 'pt-BR' ) {
			
			$this->lang_name = "Português do Brasil";
		}
		else{
			$this->lang_name = "Hi. Lang object construct success";
		}
		
	}
	
	//provide class properties
	public function lang_name() {
		return $this->lang_name;
	}
	
	//choose Wp or J4 translation method - function does not work; can't pass back the string to wp
	public function set( $string ) {
		global $gs_global;
		
		if( $gs_global == 'wp' ) {
			return __( $string , 'gs-simplecrm');
		}
	}
	
}
