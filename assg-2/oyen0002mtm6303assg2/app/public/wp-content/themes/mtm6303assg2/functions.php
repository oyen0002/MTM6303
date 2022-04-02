<?php
/**
 * mtm6303-assg2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mtm6303assg2
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303assg2_setup() {
    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'mtm6303assg2' ),
		'social' => __( 'Social Links Menu', 'mtm6303assg2' ),
	) );

}
add_action( 'after_setup_theme', 'mtm6303assg2_setup' );