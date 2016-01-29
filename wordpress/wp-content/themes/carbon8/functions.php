<?php

/** Login */

// Custom Login Stylesheet	
  
	function my_login_stylesheet() { ?>
		<link rel="stylesheet" id="custom_wp_admin_css"	 href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />
	<?php };
	
	add_action('login_enqueue_scripts', 'my_login_stylesheet' );
		
	// Custom Login Logo URL	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	};
	
	function my_login_logo_url_title() {
		return 'Carbon 8';
	};

	add_filter('login_headerurl', 'my_login_logo_url');
	add_filter('login_headertitle', 'my_login_logo_url_title');


/** Images */

// Set post thumbnail size
	
	if(function_exists('add_image_size')) { 
		add_image_size( 'tall-image', 1250, 1666, true);
		add_image_size( 'medium-image', 1250, 833, true);
		add_image_size( 'large-image', 1250, 1666, true);
	};


/** Editor */

//Edit tiny MCE to remove elements

	if (isset($wp_version)) {
		add_filter("mce_buttons", "extended_editor_mce_buttons", 0);
		add_filter("mce_buttons_2", "extended_editor_mce_buttons_2", 0);
	}

// First toolbar line

	function extended_editor_mce_buttons($buttons) {
		return array(
			"bold", 
			"italic", 
			"underline", 
			// "strikethrough",
			"separator",
			"bullist", 
			"numlist", 
			// "blockquote", 
			"hr", 
			// "removeformat", 
			"separator",
			"alignleft", 
			"aligncenter", 
			"alignright", 
			"seperator",
			"undo", 
			"redo", 
			"separator", 
			"link", 
			"unlink", 
			"separator", 
			"code", 
			"separator"
		);
	}
	

// Second toolbar line

	function extended_editor_mce_buttons_2($buttons) {
		return array(
		);
	}


/** Admin Bar */

// Remove Admin Bar Front End
	add_filter('show_admin_bar', '__return_false');
	
	
/** Next / Previous Links */

// Order by Menu Order
	function my_previous_post_where() {
		global $post, $wpdb;
		return $wpdb->prepare( "WHERE p.menu_order < %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
	}
	add_filter( 'get_previous_post_where', 'my_previous_post_where' );
	
	function my_next_post_where() {
		global $post, $wpdb;
		return $wpdb->prepare( "WHERE p.menu_order > %s AND p.post_type = %s AND p.post_status = 'publish'", $post->menu_order, $post->post_type);
	}
	add_filter( 'get_next_post_where', 'my_next_post_where' );
	
	function my_previous_post_sort() {
		return "ORDER BY p.menu_order desc LIMIT 1";
	}
	add_filter( 'get_previous_post_sort', 'my_previous_post_sort' );
	
	function my_next_post_sort() {
		return "ORDER BY p.menu_order asc LIMIT 1";
	}
	add_filter( 'get_next_post_sort', 'my_next_post_sort' );
