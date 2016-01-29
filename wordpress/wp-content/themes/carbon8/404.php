<?php
/**
	The template for displaying the 404 pages.
*/
get_header(); ?>
		
	<section class="page 404">
		
		<div class="container">
		
			<div class="row">
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h1>Sorry&hellip;</h1>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <p>We don&rsquo;t seem to be able to find the page that you&rsquo;re looking for.</p>
					<p><a href="<?php echo home_url(); ?>" title="Click Here">Click here</a> to go back to the home page.</p>
				</div>
				
			</div>
			
		</div>
            
    	<div class="clearfix"></div>
	
	</section>
            
    <div class="clearfix"></div>
    
<?php get_footer(); ?>