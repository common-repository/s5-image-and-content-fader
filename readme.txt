=== Shape 5 Image and Content Fader ===
Contributors: shape5, tristanrineer
Donate link:http://s5co.us/s5donate
Tags: Slideshow, Image Rotator, Widget, Content Rotator, Media Show
Requires at least: 3.0
Tested up to: 4.5.1
Stable tag: trunk

The Shape5 Image and Content Fader provides a widget-based slideshow of images with a per-image content overlay and gallery dropdown.

== Description ==

Live Demo Here: http://shape5.com/demo/index.php?wp/corporate-response/

This widget allows you publish your own content into each slide with a nice transition effect.  It also allows for multiple slide transition effects,
navigation arrows, and a drop down gallery tab that allows you to select a slide via a thumbnail.
The S5 Image and Content Fader is powered by jQuery, and best of all, it's free!

Features at a glance:


*       Responsive layout compatible
*       Choose between 4 slide transitions:
1.          Fade,
2.          Continuous Horizontal,
3.          Fade Slide Left,
4.          Continuous Vertical
*       Specify height and width of widget
*       Includes a gallery tab drop down to show all images
*       Each image slide can have its own hyperlink 
*       Show up to 10 images at once
*       Publish your own content to each picture slide
*       Navigation arrows
*       Not all slides require titles
*       Change delay time
*       Hide or show: Navigation arrows, thumbnail carousel and popup text



== Installation ==

1.  Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page.
2.  Place the widget in a sidebar position and configure the settings



== Frequently Asked Questions ==

Q: How many slides can I have?

A: Currently up to 10 slides are supported.  In future updates we plan to remove all limits.


Q: I'm getting an error on the widget admin that says \"Warning: simplexml\_load\_file() [function.simplexml-load-file]: .....wp-content/plugins/s5-image-and-content-fader/wid_opts.xml:1: parser error : Space required after the Public Identifier in...\"

A: If you've restricted site access to a single IP, you may need to add your server's IP to the access list.  The plugin uses an XML parser to generate the options list in the widget admin, and the parser needs to be able to access to the XML from your server.


Q: Help! Something's not working right!

A: Please submit any support requests or bug reports in our forum at: http://s5co.us/icfhelp (NOTE: You will need to create a free account and log in to access the forum)


Q: Why do I have to log in to get support, isn't the plugin free?

A: Support is free, but we require a (free) signup here http://www.shape5.com/join-now.html to view and post on our forum. This allows us to assure a higher quality of support by preventing spam and holding users accountable for their posts.

== Changelog ==

3.5.1

 - Update to new function references for new WP core methods.
 - Increment version number

3.5.0

 - Overhaul of configuration/options.
 - Compatibility/performance enhancements.

3.2.1

 - Adjustment to wording of settings fields to improve readability.


3.2.0

 - Added "Full Screen Height" option
 - Added "Disable Images" option

3.1.2

 - Revert jQuery changes.

3.1.1

 - jQuery enqueue timing adjustment.

3.1.0

 - Added more timing options
 - Added option to have image rotation pause on hover
 - Improved compatibility with multibox in Shape 5 themes.

3.0.7

 - Fixed javascript typo

3.0.6

 - Minor adjustment to fix error caused by WP translation on non-English sites
 - CSS adjustment to fix 3px gap at top of image

3.0.5

 - Settings area overhaul
 - Minor code cleanup

3.0.3

 - Updated javascript to fix memory leak
 - Updated options to include additional layout capabilities.

3.0.2

 - Extended override detection to include tmpl/default.php (Example: http://shape5.com/demo/index.php?wp/new_vision - info slide moved below image)
 
3.0.1

 - Complete Rewrite
   - *NEW* Conversion using jQuery instead of Mootools
   - Added responsive/fluid site support and settings

1.2.3

 - Added automatic detection of override files for css and javascript when placed in correct subfolder of active theme.

1.2.2

 - Updated Javascript to fix compatibility issues with Internet Exploder.

1.2.1b

 - Restored missing doublequote in HTML; added some minor CSS tweaks.

1.2.1

 - Fixed a bug from 1.2 that was causing incorrect URLs for necessary resources.

1.2

 - Fixed an issue where the XML file for settings wasn't loading properly because it was being accessed using a URL rather than the direct path.