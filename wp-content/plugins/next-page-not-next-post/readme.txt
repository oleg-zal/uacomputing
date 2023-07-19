=== Plugin Name ===
Contributors: mcinvale
Tags: pages, cms, awesome
Requires at least: 2.7
Tested up to: 3.3
Stable tag: trunk

Easily create navigation to sibling pages. Similar to next_post_link() and previous_post_link() but for pages.

== Description ==

**Next Page, Not Next Post** is a very simple plugin that creates navigation between sibling pages.

This plugin gives you two new functions, `next_page_not_post($anchor_text, $loop, $sort)` & `previous_page_not_post($anchor_text, $loop, $sort)`. Each function has three simple options.

1. **Anchor Text** - Either set the anchor text manually or use the page title. Use %title to use page title with other strings. Defaults to page title, just leave blank for that.
1. **Looping** - Link the first element to the last and the last to the first, or not. Defaults to not looping. Set to true for looping, cousins for cousin based navigation and cousinsloop for cousins navigation that loops.
1. **Get Pages** - This is used to determine how to sort your results. Use the documentation at [Get Pages](http://codex.wordpress.org/Function_Reference/get_pages) to find all available options here. Defaults to menu_order ascending.

**SHORTCODES** You can use [next_page] and [previous_page] shortcodes within your page content. Supported options are 'anchor', 'loop' and 'getPagesQuery'. 

[More documentation for Next Page, Not Next Post on BinaryM.com](http://binarym.com/2009/next-page-not-next-post/)

== Installation ==

1. Upload `next_page_not_next_post.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place `<?php echo next_page_not_post(''); ?>` & `<?php echo previous_page_not_post(''); ?>` in your templates
1. See [our site](http://binarym.com/2009/next-page-not-next-post/) for more examples

== Frequently Asked Questions ==

None at this point. [Contact us](http://binarym.com/contact/) if you have any and I'll add them here.
