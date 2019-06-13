<?php

	add_action( 'init', 'create_post_type_custom_post_type' );

	function create_post_type_custom_post_type() {
		register_post_type( 'custom-post-type',
		array(
			'labels'             =>
			array(
				'name'               => _x( 'Custom Post Type', 'post type general name', 'your-plugin-textdomain' ),
				'singular_name'      => _x( 'Custom Post Type', 'post type singular name', 'your-plugin-textdomain' ),
				'menu_name'          => _x( 'New Post Type', 'admin menu', 'your-plugin-textdomain' ),
				'name_admin_bar'     => _x( 'Custom Post Type', 'add new on admin bar', 'your-plugin-textdomain' ),
				'add_new'            => _x( 'Add New', 'service', 'your-plugin-textdomain' ),
				'add_new_item'       => __( 'Add New Custom Post Type', 'your-plugin-textdomain' ),
				'new_item'           => __( 'New Custom Post Type', 'your-plugin-textdomain' ),
				'edit_item'          => __( 'Edit Custom Post Type', 'your-plugin-textdomain' ),
				'view_item'          => __( 'View Custom Post Type', 'your-plugin-textdomain' ),
				'all_items'          => __( 'All Custom Post Type', 'your-plugin-textdomain' ),
				'search_items'       => __( 'Search Custom Post Type', 'your-plugin-textdomain' ),
				'parent_item_colon'  => __( 'Parent Custom Post Type:', 'your-plugin-textdomain' ),
				'not_found'          => __( 'No Custom Post Type found.', 'your-plugin-textdomain' ),
				'not_found_in_trash' => __( 'No Custom Post Type found in Trash.', 'your-plugin-textdomain' )
			),
	        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'custom-post-type' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array( 'title', 'editor' ),
			'menu_icon' => 'dashicons-businessman',
		));
	}

?>
