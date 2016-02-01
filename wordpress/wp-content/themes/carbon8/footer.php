<?php
/**
	The template for displaying the FOOTER after the close of <div id="page-wrapper">
*/
?>

	<div class="clearfix"></div>
	<?php // header.php: <div id="page-wrapper"> ?>
	</div>
	
	<footer id="footer" class="footer">
				
		<div class="container">
		
			<div class="row">
			
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<p><strong><?php bloginfo( 'name' ); ?></strong></p>
					<p>Branding. Digital. Print.</p>
				</div>
				</div>
				
				<?php if((get_field('phone_number', 9)) || (get_field('email_address', 9))): ?>
					<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<p>Get in touch</p>
						<p>
							<?php 
								if(get_field('phone_number', 9)): echo get_field('phone_number', 9); endif;
								if((get_field('phone_number', 9)) || (get_field('email_address', 9))): echo '<br />'; endif;
								if(get_field('email_address', 9)): echo '<a href="mailto:' . get_field('email_address', 9) . '" title="Get in touch">' . get_field('email_address', 9) . '</a>'; endif; 
							?>
						</p>
					</div>
					</div>
				<?php endif; ?>
				
			</div>
			
		</div>
	
				
	</footer>

	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	<?php wp_footer(); ?>

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-9111464-19', 'auto');
		ga('send', 'pageview');
	</script>
	
	
</body>
</html>