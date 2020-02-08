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
*	- Version starts with 2.0.0
*		Previous version was created for Joomla! 3.8 using libraries that need replacement
*		New version 2.0.0 developed for WP and later adapted for Joomla!
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

@ Credits: 	WP plugin leverages WordPress Plugin Boilerplate; It based on the Plugin API, Coding Standards and Documentation Standards. 
			The WordPress Plugin Boilerplate was started in 2011 by [Tom McFarlin](http://twitter.com/tommcfarlin/).
			In March of 2015 the project was handed over by Tom to Devin Vinson.
			The current version was developed in conjunction with [Josh Eaton](https://twitter.com/jjeaton), 
			[Ulrich Pogson](https://twitter.com/grapplerulrich), and [Brad Vincent](https://twitter.com/themergency).
			It is hosted on GitHub https://github.com/DevinVinson/WordPress-Plugin-Boilerplate

 --- Component/Plug-in methods ---
 
 To switch code from WP or J!, a global variable is set to $gs_global = 'wp'; or $gs_global = 'j4';
 it requires Wordpress version 5.3 or Joomla! version 4.0. The gsConfig class checks the version and may update $gs_global 

 * Language, translation and internationalization
 WP uses:  __( 'Blog Options', 'my-plugin' );
 J! uses: JText::_('TRANSLATABLE_STRING');
 Class gsLanguage handles replacement for WP or J! strings; it also handles some string filters unique to go-source software.
 The method: gsLanguage::txt('string') returns a WP or J! string according to $gs_global








* 
*/


