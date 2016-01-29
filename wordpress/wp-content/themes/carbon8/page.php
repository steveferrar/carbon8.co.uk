<?php
/**
	The template for displaying all GENERIC pages.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php echo get_template_part('part', 'page-content' ); ?>
			<?php echo get_template_part('part', 'page-images' ); ?>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>