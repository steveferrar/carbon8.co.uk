<?php
/**
	The template part for displaying all WORK IMAGE sections.
*/
?>
			
<?php
if(get_field('images')):
while(has_sub_field('images')):
?>

	<section class="work__images">
	
		<div class="container-fluid">
		
			<?php
			// Large Image
			if((get_sub_field('image_1')) && !(get_sub_field('image_2'))):
			?>
			
				<div class="row">
				
					<?php
					// Image 1
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'large' );
					?>			
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="row">
						<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
					</div>
					</div>
					
				</div>
		
			<?php
			// Small Images
			elseif((get_sub_field('image_1')) && (get_sub_field('image_2'))):
			?>
			
				<div class="row">
				
					<?php
					// Image 1
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'medium' );
					?>			
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
					</div>
					</div>
					
					<?php
					// Image 2
					$image_2 = wp_get_attachment_image_src( get_sub_field('image_2') , 'medium' );
					?>			
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<img src="<?php echo $image_2[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
					</div>
					</div>
					
				</div>
			
			<?php
			endif;
			?>
			
		</div>
		
		<div class="clearfix"></div>
		
	</section>

<?php
endwhile;
endif;
?>