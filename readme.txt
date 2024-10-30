=== LH Remove Query Strings ===
Contributors: shawfactor
Donate link: http://lhero.org/portfolio/lh-remove-query-strings/
Tags: static, javascript, css, speed, optimisation
Requires at least: 3.0.
Tested up to: 4.9
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


Remove query strings from static resurces whilst maintaining cache busting

== Description ==

This plugin removes the query string from the url of static resources hosted locally and moves the string into the file name.

Note it requires the server to be using htaccess and the for the adminstrator to update their htaccess file for this to work.



== Frequently Asked Questions ==

= Will this work for everyone? =

Short anwer is no it won´t, this requires your server to use htaccess and for yo to be able to add the rules to that file.

= Why is this plugin approach better? =

This plugin allows the caching benefits of removing query strings whilst still allowing static resources to be updated when their content is changed.



== Installation ==

1. Upload the entire `lh-remove-query-strings` folder to the `/wp-content/plugins/` directory.
1. Add the following code to your .htaccess: https://gist.github.com/steveosoule/1f458dde9e26ff5a0682
1. Activate the plugin through the 'Plugins' menu in WordPress.


== Changelog ==

**1.00 September 05, 2018**  
Initial release.