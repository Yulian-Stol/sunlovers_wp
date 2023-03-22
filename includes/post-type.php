<?php 

//------------------Register Custom Post Sleep----------------------
	function sleep_post_type() {
			$labels = array(
					'name'                  => _x( 'Sleep', 'Post Type General Name', 'text_domain' ),
					'singular_name'         => _x( 'Sleep', 'Post Type Singular Name', 'text_domain' ),
					'menu_name'             => __( 'Sleep', 'text_domain' ),
					'all_items'             => __( 'Sleep', 'text_domain' ),
					'add_new_item'          => __( 'Добавити Sleep', 'text_domain' ),
					'add_new'               => __( 'Добавити Sleep', 'text_domain' ),
			);
			$args = array(
					'label'                 => __( 'Sleep', 'text_domain' ),
					'labels'                => $labels,
					'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 4,
					'menu_icon'             => 'dashicons-images-alt2',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
					'show_in_rest' => true, // Important !
					add_theme_support( 'post-thumbnails' ),
					// 'taxonomies'          => array( 'category' ),
			);
			register_post_type( 'sleep', $args );
			
	}
	add_action( 'init', 'sleep_post_type', 0 );

	//------------------Register Custom Post Breathing----------------------
	function breathing_post_type() {
		$labels = array(
				'name'                  => _x( 'Breathing', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Breathing', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Breathing', 'text_domain' ),
				'all_items'             => __( 'Breathing', 'text_domain' ),
				'add_new_item'          => __( 'Добавити Breathing', 'text_domain' ),
				'add_new'               => __( 'Добавити Breathing', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'Breathing', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest' => true, // Important !
				add_theme_support( 'post-thumbnails' ),
				// 'taxonomies'          => array( 'category' ),
		);
		register_post_type( 'breathing', $args );
		
	}
	add_action( 'init', 'breathing_post_type', 0 );


	//------------------Register Custom Post Blog----------------------
	function bloglove_post_type() {
		$labels = array(
				'name'                  => _x( 'Blog', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Blog-love', 'text_domain' ),
				'all_items'             => __( 'Blog', 'text_domain' ),
				'add_new_item'          => __( 'Добавити Blog-love', 'text_domain' ),
				'add_new'               => __( 'Добавити Blog-love', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'bloglove', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest' => true, // Important !
				add_theme_support( 'post-thumbnails' ),
				// 'taxonomies'          => array( 'category' ),
		);
		register_post_type( 'bloglove', $args );
		
	}
	add_action( 'init', 'bloglove_post_type', 0 );
	

	//------------------Register Custom Post Blog----------------------
	function blogfriendship_post_type() {
		$labels = array(
				'name'                  => _x( 'Blog', 'Post Type General Name', 'text_domain' ),
				'singular_name'         => _x( 'Blog', 'Post Type Singular Name', 'text_domain' ),
				'menu_name'             => __( 'Blog-friendship', 'text_domain' ),
				'all_items'             => __( 'Blog', 'text_domain' ),
				'add_new_item'          => __( 'Добавити Blog-friendship', 'text_domain' ),
				'add_new'               => __( 'Добавити Blog-friendship', 'text_domain' ),
		);
		$args = array(
				'label'                 => __( 'blogfriendship', 'text_domain' ),
				'labels'                => $labels,
				'supports'              => array( 'thumbnail','title', 'editor','excerpt' ),// 'title','editor','author','thumbnail',,'trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 4,
				'menu_icon'             => 'dashicons-images-alt2',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest' => true, // Important !
				add_theme_support( 'post-thumbnails' ),
				// 'taxonomies'          => array( 'category' ),
		);
		register_post_type( 'blogfriendship', $args );
		
	}
	add_action( 'init', 'blogfriendship_post_type', 0 );

