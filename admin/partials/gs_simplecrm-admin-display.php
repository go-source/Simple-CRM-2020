<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * Wordpress plugin
 *
 * @package    gs_simplecrm
 * @subpackage gs_simplecrm/admin
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @since      2.0.0
 */
if ( is_admin() ) {
    // we are in admin mode
?>
	<form>
	<div class="" style="width: 80%; border-style: solid; border-radius: 10px; float: left; margin-left: 10%; " >

		<h1>Simple CRM Admin Panel</h1>
		
		<div>
			<div style="float: left">
				<h2>Left - config options</h2>
			</div>
			<div style="float: right">
				<h2>Right - user management</h2>
			</div>
		</div>		
	</div>
	</form>
    
<?php    }


