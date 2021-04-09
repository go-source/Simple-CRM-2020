<?php
/**
 * @version    CVS: 2.0.0
 * @package    Com_Gscrm20
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @copyright  2021 Pedro Bicudo Maschio
 * @license    GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// this calls the base display class JViewLegacy
// If your view needs to load JavaScript code, do not do that in the view, as the code might not get included when caching is enabled.
// Load those scripts in the controller instead.

class Gscrm20ViewGscrm20 extends JViewLegacy
{
	function display($tpl = null)
	{
		// Assign data to the view
		$this->msg = 'Hello World';
 
		// Display the view
		parent::display($tpl);
	}
}