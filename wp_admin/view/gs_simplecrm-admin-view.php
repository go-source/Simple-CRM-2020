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
    
    // IMPORTANT - some strings not prepared for translation - needs fixing 
?>
	<div class="wrap">
      
      <h1><?php esc_html( 'Simple CRM Administration' ); ?></h1>
      	
      	<p><?php echo GS_SIMPLECRM_NAME.' version '.GS_SIMPLECRM_VERSION.' year '.$gsComponent->copyright_year()  ?></p>
      
      <?php
	      /*
	      To process the submissions of forms on options pages, you will need two things:
	      1.Use the URL of the page as the action attribute of the form.
		  2.Add a hook with the slug, returned by add_menu_page.
		  */
      ?>      
      <form action="<?php menu_page_url( plugin_dir_path(__FILE__) . 'admin/view/'.GS_SIMPLECRM_CODENAME.'-admin-view.php' ) ?>" method="post">
        <?php
        // output security fields for the registered setting "wporg_options"
        settings_fields( 'wporg_options' );
        // output setting sections and their fields
        // (sections are registered for "wporg", each field is registered to a specific section)
        do_settings_sections( 'wporg' );
        // output save settings button
        submit_button( 'Save Settings' );
        ?>
<!-- 	<div class="" style="width: 80%; border-style: solid; border-radius: 10px; float: left; margin-left: 10%; " > -->

		<br>
		<p>___</p>
		<p>___</p>
		<p><?php  
					$lang = new gsLanguage();
					$user = get_user_by( 'id', 1 ); //get_current_user_id()
					
					$user_name = __( 'User name:' , 'gs-simplecrm');
					
					echo __( 'lang test: - ', 'gs-simplecrm').$lang->gs_lang_name().'<br>'.$user_name.' '.$user->display_name.'<br> filter '.current_filter() ;
					//echo '<br>'.print_r($response).'<br>';
					//echo '<pre>'; print_r( _get_cron_array() ); echo '</pre>';
					echo __( 'what else should I translate', 'gs-simplecrm' ) ;
			
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

<!-- 	</div> -->
	</form>
	</div>
    
<?php    }


