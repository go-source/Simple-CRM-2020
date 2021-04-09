<?php
	
/*
* This is a documentation file. No working code here.
* 
* @Version 2.0.0
* @copyright  2020 Pedro Bicudo Maschio
* @license    GNU General Public License version 2 or later; see LICENSE.txt 
* 
* Simple-CRM for Wordpress and Joomla! by go-source.com / pmoft.com
* Contact: bicudomaschio@gmail.com
* 
* --- CHANGELOG ---
*
*- Version starts with 2.0.0
*  Previous version was created for Joomla! 3.8 using libraries that need replacement
*  2020: New version 2.0.0 developed for WP and later adapted for Joomla!
*  2021: suspend the WP development to focus on Joomla!
*
  --- Architecture and tools references --- knowledge available on Jan/2020 ---
 
Progressive Web App (PWA)
https://codelabs.developers.google.com/codelabs/your-first-pwapp/#0
 
Workbox provides a Javascript library to cache and speed PWA
Service workers can listen for a few kinds of events and react to them. 
https://developers.google.com/web/tools/workbox/

Chrome DevTools
https://developers.google.com/web/tools/chrome-devtools?utm_source=dcc&utm_medium=redirect&utm_campaign=2018Q2
  
IndexedDB is a large-scale, NoSQL storage system. It lets you store just about anything in the user's browser.
https://developers.google.com/web/ilt/pwa/working-with-indexeddb
 
The Cache API was created to enable Service Workers to cache network requests so that they can provide appropriate responses even while offline. 
However, the API can also be used as a general storage mechanism.
https://developers.google.com/web/fundamentals/instant-and-offline/web-storage/cache-api
 
Alternative: Wordpress Plugin - search https://wordpress.org/plugins/search/PWA/
If you are developing a plugin or theme that includes a service worker, consider relying on this PWA plugin, 
or at least only use the built-in implementation as a fallback for when the PWA plugin is not available.
 
 --- Learn WP 2020 - quick reference guide ---

WP language: Network is the master site. Network has blogs (each site is a blog). Users have capabilities. 
User caoabilities is similar to Joomla's ACL
WP key functions include hooks: actions and filters
 
* References - 
https://developer.wordpress.org/reference/functions/
Documentation Standards: https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/)
Coding Standards: https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/
https://developer.wordpress.org/apis/handbook/filesystem/

https://developer.wordpress.org/plugins/plugin-basics/
Plugin API: https://codex.wordpress.org/Plugin_API

@ Credits: 	WP plugin leverages WordPress Plugin Boilerplate; with some function changes and folder name simplification.
			This plugin follows most Coding Standards and Documentation Standards, exeption exist in particular when using camel case. 
			The WordPress Plugin Boilerplate was started in 2011 by [Tom McFarlin](http://twitter.com/tommcfarlin/).
			In March of 2015 the project was handed over by Tom to Devin Vinson.
			The current version was developed in conjunction with [Josh Eaton](https://twitter.com/jjeaton), 
			[Ulrich Pogson](https://twitter.com/grapplerulrich), and [Brad Vincent](https://twitter.com/themergency).
			It is hosted on GitHub https://github.com/DevinVinson/WordPress-Plugin-Boilerplate

 --- Component/Plugin methods ---
 
 To switch code from WP or Joomla, a global variable is set to $gs_global = 'wp'; or $gs_global = 'j4';
 it requires Wordpress version 5.3 or Joomla! version 4.0 and above.

 ** gsComponent class properties are passead then instantiating at install (1st php file)

 example:	$component_array = array(
 					'name' 		=> 'long name as printed in titles',	
 					'codename'	=> 'gs_simplecrm',
 					'cms'		=> $gs_global,
	 				'version'			=> '2.0.0',
	 				'copyright_year'	=> '2020',
		 			'allow_backend'		=> 1,
		 			'allow_frontend'	=> 1,
		 			'allow_download'	=> 1,
		 			'allow_upload'		=> 1,
		 			'load_gs_classes'	=> 1,
		 			'plugin_dir'		=> plugin_dir_path( __FILE__ )
	 				);	 				
	$gsComponent = new gsComponent( $component_array );

 ** Language, translation and internationalization
 
 WP uses:  __( 'Blog Options', 'my-plugin' );
 J4 uses: JText::_('TRANSLATABLE_STRING');
 Class gsLanguage handles replacement for wp or j4 strings; in addition, it may handle string filters unique to go-source software.
 The method: gsLanguage::txt('string') returns a wp or j4 string according to the request

NEXT:
- change add admin view to class? Or new instance call in the view?
- include admin submenu https://developer.wordpress.org/plugins/administration-menus/sub-menus/

<<<<<<< Updated upstream:gsclasses/gs-documentation.php


=======
-*- -*- Joomla Component -*- -*-
framework - tutorial in https://docs.joomla.org/J3.x:Developing_an_MVC_Component/Developing_a_Basic_Component
1 	helloworld.xml 			this is an XML (manifest) file that tells Joomla! how to install our component.
2 	assets/helloworld.php 	this is the site entry point to the Hello World! component
3 	assets/index.html 		prevents web server from listing directory content
	assets/gsclasses
	assets/controllers
	assets/models
	assets/views
	assets/js
	assets/images
	assets/css
4 	j4_admin/index.html 		prevents web server from listing directory content
5 	j4_admin/helloworld.php 	this is the administrator entry point to the Hello World! component
6 	j4_admin/sql/index.html 	prevents web server from listing directory content
7 	j4_admin/sql/updates/index.html 		prevents web server from listing directory content
8 	j4_admin/sql/updates/mysql/index.html 	prevents web server from listing directory content
9 	j4_admin/sql/updates/mysql/0.0.1.sql 	file allowing to initialise schema version of the com_helloworld component. 

in GitHub, the folders are precede by j4_ to separate Joomla! and Wordpress folders. Example /j4_site/
>>>>>>> Stashed changes:assets/gsclasses/gs-documentation.php




* 
*/


