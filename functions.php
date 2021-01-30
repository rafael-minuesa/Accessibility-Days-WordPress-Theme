<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

// Lectures Post Type
function cptui_register_my_cpts() {

	/**
	 * Post Type: Lectures.
	 */

	$labels = array(
		"name" => __( "Lectures", "custom-post-type-ui" ),
		"singular_name" => __( "Lecture", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Lectures", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "lectures", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ),
		"taxonomies" => array( "lectures_categories", "lectures_tags" ),
	);

	register_post_type( "lectures", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

// Custom Post Type Taxonomies
function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Lectures Categories.
	 */

	$labels = array(
		"name" => __( "Lectures Categories", "custom-post-type-ui" ),
		"singular_name" => __( "Lecture Category", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Lectures Categories", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'lectures_categories', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "lectures_categories",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "lectures_categories", array( "lectures" ), $args );

	/**
	 * Taxonomy: Lectures Tags.
	 */

	$labels = array(
		"name" => __( "Lectures Tags", "custom-post-type-ui" ),
		"singular_name" => __( "Lecture Tag", "custom-post-type-ui" ),
	);

	$args = array(
		"label" => __( "Lectures Tags", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'lectures_tags', 'with_front' => true, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "lectures_tags",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		);
	register_taxonomy( "lectures_tags", array( "lectures" ), $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

// Add Authors to archives.php from Custom Post Types
function custom_post_author_archive($query) {
    if ($query->is_author)
        $query->set( 'post_type', array('lectures', 'post') );
    remove_action( 'pre_get_posts', 'custom_post_author_archive' );
}
add_action('pre_get_posts', 'custom_post_author_archive');