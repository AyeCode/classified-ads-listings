<?php


/**
 * Swap the parent theme for the child theme in some patterns.
 *
 * This is stupid and WordPress should fix it.
 *
 * @param $content
 *
 * @return array|string|string[]
 */
function classified_ads_listings_theme_swap_pattern_theme_name( $content ) {
	return str_replace( array( ',"theme":"blockstrap"', '' ), array( ',"theme":"classified-ads-listings"', '' ), $content );
}
add_filter( 'blockstrap_pattern_page_content_archive_default', 'classified_ads_listings_theme_swap_pattern_theme_name', 15, 1 );
