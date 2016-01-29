<?php
/**
	The template for displaying the HOME page.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php echo get_template_part('part', 'page-content' ); ?>
						
		<?php endwhile; ?>
			
		<?php 
		// Work Thumbnail Links
		echo get_template_part('part', 'work-thumbnails' ); 
		?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>