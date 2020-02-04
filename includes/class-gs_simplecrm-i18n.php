<?php

/**
 * Define the internationalization functionality
 *
 * Wordpress plugin
 *
 * @package    gs_simplecrm
 * @subpackage gs_simplecrm/admin
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @since      2.0.0
 */
class Gs_simplecrm_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    2.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gs_simplecrm',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
