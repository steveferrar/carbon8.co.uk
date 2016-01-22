<?php
/*
The template for displaying the SPEAKERS archive page.
*/

get_header(); ?>
		
	<?php 
	// Home Page Content
	$homeContent = new WP_Query( 'page_id=2' ); 
	while ( $homeContent->have_posts() ) : 
		$homeContent->the_post();
		echo get_template_part('part', 'page-content' ); 
	endwhile;
	wp_reset_postdata();
	?>
			
	<?php
	// Work Thumbnail Links
	echo get_template_part('part', 'work-thumbnails' ); 
	?>
    
<?php get_footer(); ?>