<?php /* Functions.php */

// ACTIONS
	add_action('login_enqueue_scripts', 'my_login_stylesheet' );

// FILTERS
	add_filter('login_headerurl', 'my_login_logo_url');
	add_filter('login_headertitle', 'my_login_logo_url_title');


/** Login Stylesheet */

// Custom Login Stylesheet	  
	function my_login_stylesheet() { ?>
		<link rel="stylesheet" id="custom_wp_admin_css"	 href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/style-login.css'; ?>" type="text/css" media="all" />
	<?php };
		
	// Custom Login Logo URL	
	function my_login_logo_url() {
		return get_bloginfo( 'url' );
	};
	
	function my_login_logo_url_title() {
		return 'Carbon 8';
	};


/** Images */

// Set post thumbnail size
	
	if(function_exists('add_image_size')) { 
		// add_image_size( 'cropped', 420, 420, true);
		// add_image_size( 'dynamic', 1440, 9999, false);
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
			"strikethrough",
			"separator",
			"bullist", 
			"numlist", 
			// "blockquote", 
			"hr", 
			// "removeformat", 
			"separator",
			"justifyleft", 
			"justifycenter", 
			"justifyright", 
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
