<?php

/**
 * Wordpress plugin
 *
 * Define the internationalization functionality
 *
 * @package    gs_simplecrm
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
			GS_SIMPLECRM_CODENAME,
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . 'languages/'
		);
	}
}
