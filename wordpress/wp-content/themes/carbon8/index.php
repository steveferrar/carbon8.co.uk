<?php
/**
	The main template file.
*/
get_header(); ?>
	
	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php echo get_template_part('part', 'page-content' ); ?>
			
		<?php endwhile; ?>
		
	<?php else : ?>
		
		<section class="404">
		
			<div class="container">
			
				<div class="row">
				
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h1>Sorry&hellip;</h1>
					</div>
					
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<p>There are no articles to display at the moment. Please check back later.</p>
						<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
					</div>
					
				</div>
				
			</div>
			
			<div class="clearfix"></div>
			
		</section>
		
	<?php endif; ?>
			
	<div class="clearfix"></div>
	
<?php get_footer(); ?>