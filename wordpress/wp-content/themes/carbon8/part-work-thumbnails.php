<?php
/**
	The template part for displaying all WORK THUMBNAILS.
*/
?>
			
<?php
$workQuery = array(
	'numberposts' => -1,
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type' => 'work'
);
$workThumbnails = new WP_Query( $workQuery );
?>

<?php
if( $workThumbnails->have_posts() ): 
?>

	<section class="work__thumbnails">
	
		<div class="container-fluid">
		
			<div class="row">
	
				<?php 
				$c = 1;
				while( $workThumbnails->have_posts()): 
				$workThumbnails->the_post();
				$thumbnail = wp_get_attachment_image_src( get_field('thumbnail') , 'medium' );
				?>	
				
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<a href="<?php echo get_permalink(); ?>" title="<?php // the_title(); ?>" class="js-thumbnails">
							<div class="caption">
								<h2><?php the_title(); ?></h2>
							</div>
							<img src="<?php echo $thumbnail[0]; ?>" alt="<?php the_title(); ?>" class="full-width-image" data-no-retina>
						</a>
					</div>
					</div>
					
				<?php 
				$c++;
				endwhile;
				?>
				
			</div>
		
		</div>
	
	</section>
		
<?php 
endif;
?>