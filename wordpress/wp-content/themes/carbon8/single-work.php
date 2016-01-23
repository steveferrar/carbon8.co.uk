<?php
/*
	The template for displaying all WORK pages.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php echo get_template_part('part', 'page-content' ); ?>
			<?php echo get_template_part('part', 'work-images' ); ?>
			
						
			<div class="newer-posts"><?php next_post_link('%link', 'Next'); ?></div>
			<div class="older-posts"><?php previous_post_link('%link', 'Previous Article'); ?></div>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>