<?php

/**
 * Wordpress plugin
 *
 * Provide a admin area view for the plugin
 *
 * @package    gs_simplecrm
 * @author     Pedro Bicudo Maschio <bicudomaschio@gmail.com>
 * @since      2.0.0
 */
 global $gs_global;
 
 if( $gs_global !== 'wp' || !defined('WPINC')) { exit; }

if ( is_admin() ) {
    // we are in admin mode, continue. If not admin, no page content 
?>
	<form>
	<div class="" style="width: 80%; border-style: solid; border-radius: 10px; float: left; margin-left: 10%; " >

		<h1>Simple CRM Admin Panel</h1>
		<p><?php echo GS_SIMPLECRM_NAME.' version '.GS_SIMPLECRM_VERSION.' year '.$gsComponent->copyright_year()  ?></p>
		<br>
		<p>___</p>
		<p>___</p>
		<p><?php  
					$lang = new gsLanguage();
					
					echo 'lang test: - '.$lang->lang_name().'<br> ';
			
		?></p>

		
		<div>
			<div style="float: left">
				<h2>Left - config options</h2>
			</div>
			<div style="float: right">
				<h2>Right - user management</h2>
			</div>
		</div>	
		<br>

	</div>
	</form>
    
<?php    }


