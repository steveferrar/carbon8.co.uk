<?php
/**
	The template for displaying the HEADER until <div id="page-wrapper">
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->

<head>
	
	<title>
		<?php
			global $page, $paged;
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'blanktheme' ), max( $paged, $page ) );
		?>
	</title>
	
	<?php // Meta SEO handled by plugin ?>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon-144x144-precomposed.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	
	<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3.js"></script>

	<?php wp_head(); ?>
	
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<style type="text/css">
				.gradient {
					filter: none;
				}
			</style>
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>

	<!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]--> 

	<header id="header" class="">
				
		<div class="container">
		
			<div class="row">
			
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<a href="<?php echo get_home_url(); ?>" title="<?php bloginfo( 'name' ); ?>"><?php /*<img src="<?php bloginfo('template_url'); ?>/img/carbon8.png" alt="Carbon 8" /> */ ?><?php bloginfo( 'name' ); ?></a>
				</div>
				</div>

				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
		
					<nav id="navigation">
						
						<ul>
							<li class="nav-work"><a href="<?php // echo get_post_type_archive_link('work'); ?><?php echo get_home_url(); ?>" title="Work">Work</a></li>
							<li class="nav-profile"><a href="<?php echo get_permalink(7); ?>" title="Profile">Profile</a></li>
							<li class="nav-contact"><a href="<?php echo get_permalink(9); ?>" title="Contact">Contact</a></li>
						</ul>
						
					</nav>
				
				</div>
				</div>
			
			</div>
		
		</div>
	
	</header>
	
	<div id="page-wrapper"><?php // footer.php: </div> ?>