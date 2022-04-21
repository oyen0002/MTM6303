<?php
/**
 * mtm6303-assg2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mtm6303final
 * @since MTM6303 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303final_setup() {
	//this theme uses wp_nav_menu() in two locations.
	register_nav_menus(array(
		'top' => __('Top Menu', 'mtm6303final'),
		'socia;' => __('Socia Links Menu', 'mtm6303final' ),
	));

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303final-featured-image', 2000, 1200, true );

	// enqueue style
    wp_enqueue_style( 'mtm6303-main-styles', get_theme_file_uri( '/assets/css/main.a3f694c0.css' ), '', '1.0' );

    //enqueue script
    wp_enqueue_script( 'jquery', get_theme_file_uri( 'js/jquery.js' ), '', '1.0.0', true );
    
}

function mtm6303_getnav($theme_location="top") {
    $nav_items_return = [];
    global $wp_query;
    $current_post_title = $wp_query->post->post_title;
  	$theme_locations = get_nav_menu_locations();

	$menu_obj = get_term($theme_locations[$theme_location], 'nav_menu');

	
    $menu_name = $menu_obj->name;
    $nav_items = wp_get_nav_menu_items($menu_name);
    foreach ($nav_items as $nav_item_id => $nav_item) {
        if  ($nav_item->post_status == "publish"){
            $nav_items_return[$nav_item_id]["ID"] = $nav_item->ID;
            $nav_items_return[$nav_item_id]["url"] = $nav_item->url;
            $nav_items_return[$nav_item_id]["title"] = $nav_item->title;
            $nav_items_return[$nav_item_id]["classes"] = implode(" ",$nav_item->classes);
            $nav_items_return[$nav_item_id]["active"] = false;
			if($current_post_title == $nav_item->title) {
                $nav_items_return[$nav_item_id]["active"] = true;
			}	
		}
	}
	return $nav_items_return;
}

add_action( 'after_setup_theme', 'mtm6303final_setup' );

?>