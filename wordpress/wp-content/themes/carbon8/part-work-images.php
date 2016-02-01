<?php
/**
	The template part for displaying all WORK IMAGE sections.
*/
?>
			
<?php
if(get_field('images')):
?>

	<section class="work__images">
	
		<div class="container-fluid">
		
			<?php
			while(has_sub_field('images')):
			?>
				
				<div class="row">

					<?php
					// Large Image
					if(get_sub_field('number_of_images') == 'One_Large_Image'):
					if(get_sub_field('image_1')):
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'large-image' );
					?>

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="row">
							<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>
						
					<?php
					endif;
					endif;
					?>
					
					<?php
					// Two Small Images
					if(get_sub_field('number_of_images') == 'Two_Small_Images'):
					if((get_sub_field('image_1')) && (get_sub_field('image_2'))):
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'medium-image' );
					$image_2 = wp_get_attachment_image_src( get_sub_field('image_2') , 'medium-image' );
					?>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_2[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>
					
					<?php
					endif;
					endif;
					?>
					
					<?php
					// Tall Image Left, Two Small Images
					if(get_sub_field('number_of_images') == 'Tall_Left_Image'):
					if((get_sub_field('image_1')) && (get_sub_field('image_2')) && (get_sub_field('image_tall'))):
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'medium-image' );
					$image_2 = wp_get_attachment_image_src( get_sub_field('image_2') , 'medium-image' );
					$image_tall = wp_get_attachment_image_src( get_sub_field('image_tall') , 'tall-image' );
					?>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_tall[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
							<img src="<?php echo $image_2[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>
					
					<?php
					endif;
					endif;
					?>
					
					<?php
					// Two Small Images, Tall Image Right
					if(get_sub_field('number_of_images') == 'Tall_Right_Image'):
					if((get_sub_field('image_1')) && (get_sub_field('image_2')) && (get_sub_field('image_tall'))):
					$image_1 = wp_get_attachment_image_src( get_sub_field('image_1') , 'medium-image' );
					$image_2 = wp_get_attachment_image_src( get_sub_field('image_2') , 'medium-image' );
					$image_tall = wp_get_attachment_image_src( get_sub_field('image_tall') , 'tall-image' );
					?>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_1[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
							<img src="<?php echo $image_2[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>

						<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<div class="row">
							<img src="<?php echo $image_tall[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</div>
						</div>
					
					<?php
					endif;
					endif;
					?>
						
				</div>

			<?php
			endwhile;
			?>
				
		</div>
		
		<div class="clearfix"></div>
			
	</section>

<?php
endif;
?>