<?php
/*
The template part for displaying all PAGE IMAGE sections.
*/
?>
			
<?php
if((get_field('image_1') || get_field('image_2'))):
?>

	<section class="page-images">
	
		<div class="container">
		
			<div class="row">
			
				<?php
				// Image 1
				if(get_field('image_1')):
				$image_1 = wp_get_attachment_image_src( get_field('image_1') , 'medium' );
				?>			
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
					</div>
				<?php
				endif;
				?>
				
				<?php
				// Image 2
				if(get_field('image_2')):
				$image_2 = wp_get_attachment_image_src( get_field('image_2') , 'medium' );
				?>			
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<img src="<?php echo $image_2[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
					</div>
				<?php
				endif;
				?>
				
			</div>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>

<?php
endif;
?>