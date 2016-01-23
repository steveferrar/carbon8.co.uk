<?php
/*
The template part for displaying all CONTENT sections.
*/
?>
				
<section class="page-content">

	<div class="container">
	
		<div class="row">
						
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="row">
				<h1><?php the_title(); ?></h1>
			</div>
			</div>
			
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="row">
				<?php the_content(); ?>
			</div>
			</div>
			
		</div>
		
	</div>
	
	<div class="clearfix"></div>
	
</section>