<?php
// Register Custom Post Type
function register_d4testimonial_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'd4-base-plugin' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'd4-base-plugin' ),
		'menu_name'             => __( 'Testimonials', 'd4-base-plugin' ),
		'name_admin_bar'        => __( 'Post Type', 'd4-base-plugin' ),
		'archives'              => __( 'Testimonial Archives', 'd4-base-plugin' ),
		'attributes'            => __( 'Testimonial Attributes', 'd4-base-plugin' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'd4-base-plugin' ),
		'all_items'             => __( 'All Testimonials', 'd4-base-plugin' ),
		'add_new_item'          => __( 'Add New Testimonial', 'd4-base-plugin' ),
		'add_new'               => __( 'Add New', 'd4-base-plugin' ),
		'new_item'              => __( 'New Testimonial', 'd4-base-plugin' ),
		'edit_item'             => __( 'Edit Testimonial', 'd4-base-plugin' ),
		'update_item'           => __( 'Update Testimonial', 'd4-base-plugin' ),
		'view_item'             => __( 'View Testimonial', 'd4-base-plugin' ),
		'view_items'            => __( 'View Testimonials', 'd4-base-plugin' ),
		'search_items'          => __( 'Search Testimonial', 'd4-base-plugin' ),
		'not_found'             => __( 'Not found', 'd4-base-plugin' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'd4-base-plugin' ),
		'featured_image'        => __( 'Featured Image', 'd4-base-plugin' ),
		'set_featured_image'    => __( 'Set featured image', 'd4-base-plugin' ),
		'remove_featured_image' => __( 'Remove featured image', 'd4-base-plugin' ),
		'use_featured_image'    => __( 'Use as featured image', 'd4-base-plugin' ),
		'insert_into_item'      => __( 'Insert into item', 'd4-base-plugin' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'd4-base-plugin' ),
		'items_list'            => __( 'Testimonials list', 'd4-base-plugin' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'd4-base-plugin' ),
		'filter_items_list'     => __( 'Filter items list', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                  => 'testimonials',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'd4-base-plugin' ),
		'description'           => __( 'Testimonials', 'd4-base-plugin' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes', ),
		'taxonomies'            => array(),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'menu_icon'				=> 'dashicons-editor-quote'
	);
	register_post_type( 'd4testimonial', $args );

}
add_action( 'init', 'testimonial_post_type', 0 );

// Register Custom Taxonomy
function register_d4testimonial_categories() {

	$labels = array(
		'name'                       => _x( 'Testimonial Categories', 'Taxonomy General Name', 'd4-base-plugin' ),
		'singular_name'              => _x( 'Testimonial Category', 'Taxonomy Singular Name', 'd4-base-plugin' ),
		'menu_name'                  => __( 'Testimonial Categories', 'd4-base-plugin' ),
		'all_items'                  => __( 'All Testimonial Categories', 'd4-base-plugin' ),
		'parent_item'                => __( 'Parent Testimonial Category', 'd4-base-plugin' ),
		'parent_item_colon'          => __( 'Parent Testimonial Category:', 'd4-base-plugin' ),
		'new_item_name'              => __( 'Testimonial Category Name', 'd4-base-plugin' ),
		'add_new_item'               => __( 'Add New Testimonial Category', 'd4-base-plugin' ),
		'edit_item'                  => __( 'Edit Testimonial Category', 'd4-base-plugin' ),
		'update_item'                => __( 'Update Testimonial Category', 'd4-base-plugin' ),
		'view_item'                  => __( 'View Testimonial Category', 'd4-base-plugin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'd4-base-plugin' ),
		'add_or_remove_items'        => __( 'Add or Remove Testimonial Categories', 'd4-base-plugin' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'd4-base-plugin' ),
		'popular_items'              => __( 'Popular Testimonial Categories', 'd4-base-plugin' ),
		'search_items'               => __( 'Search Testimonial Categories', 'd4-base-plugin' ),
		'not_found'                  => __( 'Not Found', 'd4-base-plugin' ),
		'no_terms'                   => __( 'No items', 'd4-base-plugin' ),
		'items_list'                 => __( 'Testimonial Categories list', 'd4-base-plugin' ),
		'items_list_navigation'      => __( 'Testimonial Categories list navigation', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                       => 'testimonials-categories',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'd4testimonial_category', array( 'd4testimonial' ), $args );

}
add_action( 'init', 'register_d4testimonial_categories', 0 );

// Register Custom Taxonomy
function register_d4testimonial_tags() {

	$labels = array(
		'name'                       => _x( 'Testimonial Tags', 'Taxonomy General Name', 'd4-base-plugin' ),
		'singular_name'              => _x( 'Testimonial Tag', 'Taxonomy Singular Name', 'd4-base-plugin' ),
		'menu_name'                  => __( 'Testimonial Tags', 'd4-base-plugin' ),
		'all_items'                  => __( 'All Testimonial Tags', 'd4-base-plugin' ),
		'parent_item'                => __( 'Parent Testimonial Tag', 'd4-base-plugin' ),
		'parent_item_colon'          => __( 'Parent Testimonial Tag:', 'd4-base-plugin' ),
		'new_item_name'              => __( 'Testimonial Tag Name', 'd4-base-plugin' ),
		'add_new_item'               => __( 'Add New Testimonial Tag', 'd4-base-plugin' ),
		'edit_item'                  => __( 'Edit Testimonial Tag', 'd4-base-plugin' ),
		'update_item'                => __( 'Update Testimonial Tag', 'd4-base-plugin' ),
		'view_item'                  => __( 'View Testimonial Tag', 'd4-base-plugin' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'd4-base-plugin' ),
		'add_or_remove_items'        => __( 'Add or Remove Testimonial Tags', 'd4-base-plugin' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'd4-base-plugin' ),
		'popular_items'              => __( 'Popular Testimonial Tags', 'd4-base-plugin' ),
		'search_items'               => __( 'Search Testimonial Tags', 'd4-base-plugin' ),
		'not_found'                  => __( 'Not Found', 'd4-base-plugin' ),
		'no_terms'                   => __( 'No items', 'd4-base-plugin' ),
		'items_list'                 => __( 'Testimonial Tags list', 'd4-base-plugin' ),
		'items_list_navigation'      => __( 'Testimonial Tags list navigation', 'd4-base-plugin' ),
	);
	$rewrite = array(
		'slug'                       => 'testimonials-tags',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'd4testimonial_tag', array( 'd4testimonial' ), $args );

}
add_action( 'init', 'register_d4testimonial_tags', 0 );

?>