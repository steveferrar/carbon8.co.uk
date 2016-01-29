<?php
/**
	The template for displaying all WORK pages.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php echo get_template_part('part', 'page-content' ); ?>
			<?php echo get_template_part('part', 'work-images' ); ?>

			<section class="work__navigation">

				<div class="container">

					<div class="row">
							
						<div class="col-xs-12 col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 col-lg-6">
						<div class="row">
							<?php 
							// previous_post_link('%link', 'Previous Project'); 
							next_post_link('%link', 'Next Project');
							?>
						</div>
						</div>
					
					</div>

				</div>

			</section>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>