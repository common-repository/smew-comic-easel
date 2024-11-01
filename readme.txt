=== SMEW Comic Easel &hearts; s2Member ===
Contributors: Christina "Smudge" Hanson (smudge)
Author URI: http://www.smudgemarks-engelwerks.com
Tags: Comic Easel, s2member, drip feed, comic, webcomic, featured image, drip image, time relase, membership
Requires at least: 3.0
Tested up to: 4.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

s2member integration for Comic Easel for drip feeding of comic posts.

== Description ==

s2member integration for Comic Easel for drip feeding of comic posts. Will let subscribers 'preview' comics for specified times before opening up to the wide world based on user roles. Will also allow different size images to be displayed based on user roles. Only works on Single Posts.

Both [Comic Easel] (https://wordpress.org/plugins/comic-easel/) and [s2Member Framework] (https://wordpress.org/plugins/s2member/) plugins are required.

== Known Issues ==
* This plugin currently does not work with Image Maps, Light Box, or Multi-Comic support inside of Comic Easel. It is recommended you do not use this plugin if any of those functions are nessassery for your site. Drips posts currently show up in the RSS feed.

== Upcoming ==
* Setting up Drip Feed to have options once the timelimit has expired, such as a diffrent image to display for default viewers.
* Look up WP defined images sizes for use in Image Size controls.
* Option of locking plugin usage to the Custom Post Type 'comic' (or whatever tag is spesified by Comic Easel).
* Lock images out via s2Member Custom Capabilities tags.
* Deal with RSS feed post drips.

== Changelog ==

= 0.1.8 =

Added lookup for image sizes incase someone adds a custom size for comic usage. Controls for custom image sizes currently locked.
Compatability check for WP v 4.8

= 0.1.7 =

(internal release only)
Added non-hardcoded controls to lock-out images based on Membership Levels defined by s2Member. Gives both Membership Lable as well as Membership Level in dropdown controls.

= 0.1.6 =

Tested and updated plugin with most recent verion of WordPress. Yup! Still works as intended.
Setting 'Access Level' restrictions to 'EVERYONE' when the 'Image Size' is checked will now funtion the same as if the 'Image Size' was not checked and no restrictions applied.

= 0.1.5 =

Fixed CE &hearts; s2 Thumbnail plugin to correctly see the settings drip times. Fixed bug where Thumbnail Plugin was not respecting 'Chapter' settings.

= 0.1.4.1 =

Cleaning up the Readme text for display on the WordPress.org Plugins repository. No codeing changes made.

= 0.1.4 =

Fixed the comic display so that it would correctly display/interact when 'Comic Easel'->'Clicking the comic goes to next comic' is active
Removed add_action via Frumph's wonderful suggestion.
Changed timestamp creation to fall more inline with WordPress standards.


= 0.1.3 =

(internal release only)
Added the ability to set image size via membership level. Currently hard coded to the 4 basic membership levels that come standard with s2member. It can be wonky since it can be set in any random order, so use with caution.

= 0.1.2 =

Fixed bug were variable was feeding into the wrong filter.

= 0.1.1 =

Changed plugin/file name to 'SMEW Comic Easel <3 s2member' to avoid lookup confusion with Comic Easel on the WordPress Plugin Update Repository. Doh!

= 0.1 =

* Initial Release

