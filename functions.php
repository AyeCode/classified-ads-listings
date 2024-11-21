<?php

/**
 * Classifieds functions and definitions
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;


// Pattern filters
require_once 'includes/pattern-filters.php';
require_once 'includes/pattern-filters/menu.php';


/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
add_action('wp_enqueue_scripts', 'classified_ads_listings_enqueue_styles');
function classified_ads_listings_enqueue_styles()
{
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/styles/style.css');
}

/**
 * Loads the translation files for WordPress.
 *
 * @since 1.0.0
 */
function classified_ads_listings_theme_setup()
{
    load_child_theme_textdomain('classified-ads-listings', get_stylesheet_directory() . '/languages');

    if (is_admin()) {
        // Theme admin stuff
        require_once 'includes/class-blockstrap-admin-child.php';
    }
}

add_action('after_setup_theme', 'classified_ads_listings_theme_setup');


/**
 * If we don't have BlockStrap plugin active, force it to use the parent templates.
 */
if (!defined('BLOCKSTRAP_BLOCKS_VERSION') && (!is_admin() || (is_admin() && !isset($_GET['page']) && $_SERVER['PHP_SELF'] !== '/wp-admin/themes.php'))) {
    add_filter('stylesheet_directory', 'classified_ads_listings_force_parent_stylesheet_directory');
    add_action('init', 'classified_ads_listings_include_default_patterns', 20);
    add_filter('theme_file_uri', 'classified_ads_listings_fix_font_location', 10, 2);
    add_action('init', 'classified_ads_listings_remove_all_child_block_patterns', 20);
}

/**
 * Force theme to use parent theme templates.
 *
 * @param $stylesheet_dir
 * @return mixed
 */
function classified_ads_listings_force_parent_stylesheet_directory($stylesheet_dir)
{
    return get_template_directory_uri();
}

/**
 * If the BlockStrap plugin is not installed then add some default patterns.
 *
 * @return void
 */
function classified_ads_listings_include_default_patterns()
{
    require_once 'includes/default-patterns.php';
}


/**
 * Fix the font locations for child theme when using parent theme templates when the BlockStrap plugin not installed.
 *
 * @param $url
 * @param $file
 * @return array|mixed|string|string[]
 */
function classified_ads_listings_fix_font_location($url, $file)
{

    if (in_array($file, array(
        'assets/fonts/josefin_sans/JosefinSans-VariableFont_wght.woff2',
        'assets/fonts/josefin_sans/JosefinSans-Italic-VariableFont_wght.woff2',
        'assets/montserrat/Montserrat-VariableFont_wght.woff2',
        'assets/fonts/montserrat/Montserrat-Italic-VariableFont_wght.woff2',
    ))) {
        $url = str_replace('/blockstrap/', '/classified-ads-listings/', $url);
    }

    return $url;
}


/**
 * Remove child theme patterns when BlockStrap plugin not installed.
 *
 * @return void
 */
function classified_ads_listings_remove_all_child_block_patterns()
{
    // Get all registered patterns and unregister them
    $patterns_registry = WP_Block_Patterns_Registry::get_instance();
    $all_patterns = $patterns_registry->get_all_registered();

    foreach ($all_patterns as $pattern) {
        if (!empty($pattern['slug']) && strpos($pattern['slug'], 'classified-ads-listings/') === 0) {
            unregister_block_pattern($pattern['name']);
        }
    }

}
