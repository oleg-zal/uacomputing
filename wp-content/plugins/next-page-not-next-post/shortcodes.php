<?php
add_shortcode('next_page', 'next_page_shortcode');
add_shortcode('previous_page', 'previous_page_shortcode');

function next_page_shortcode($attributes) {
	extract(shortcode_atts(array(
		'anchor' => '',
		'loop' => NULL,
		'getPagesQuery' => 'sort_column=menu_order&sort_order=asc'
	), $attributes));

	return next_page_not_post($anchor,$loop, $getPagesQuery);
}

function previous_page_shortcode($attributes) {
	extract(shortcode_atts(array(
		'anchor' => '',
		'loop' => NULL,
		'getPagesQuery' => 'sort_column=menu_order&sort_order=asc'
	), $attributes));

	return previous_page_not_post($anchor,$loop, $getPagesQuery);
}

?>
