<?php
/**
	The template for displaying the FOOTER after the close of <div id="page-wrapper">
*/
?>

	<div class="clearfix"></div>
	<?php // header.php: <div id="page-wrapper"> ?>
	</div>
	
	<footer id="footer" class="">
				
		<div class="container">
		
			<div class="row">
			
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<p><strong><?php bloginfo( 'name' ); ?></strong></p>
					<p>Branding. Digital. Print.</p>
				</div>
				</div>
			
				<div class="col-xxs-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="row">
					<p>Get in touch</p>
					<p>
						<?php if(get_field('phone_number', 9)): echo get_field('phone_number', 9); endif; ?>
						<br />
						<?php if(get_field('email_address', 9)): echo '<a href="mailto:' . get_field('email_address', 9) . '" title="Get in touch">' . get_field('email_address', 9) . '</a>'; endif; ?>
					</p>
				</div>
				</div>
				
			</div>
			
		</div>
	
				
	</footer>

	<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

	<?php wp_footer(); ?>

	<!-- Google Analytics
	<script>
		(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
		e=o.createElement(i);r=o.getElementsByTagName(i)[0];
		e.src='//www.google-analytics.com/analytics.js';
		r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
		ga('create','UA-XXXXX-X');ga('send','pageview');
	</script>
	-->
	
</body>
</html>