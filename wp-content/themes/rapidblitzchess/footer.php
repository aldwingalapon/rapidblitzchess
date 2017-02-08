		<footer id="main_footer">
			<div id="top_footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Social') ) : ?>
							<?php endif; ?>
						</div>
						<div class="clearfix clear"></div>
						<div class="col-md-12">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Copyright') ) : ?>
							<?php endif; ?>
						</div>
						<div class="clearfix clear"></div>
					</div>
					<div class="clearfix clear"></div>
				</div>
				<div class="clearfix clear"></div>
			</div>
		</footer>
	</div>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>
	<?php wp_footer(); ?>

	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.lazy.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/lightbox.min.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modal.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/classie.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/vegas.min.js" defer></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" defer></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.simplemodal.js" defer></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/scripts.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/user-interactions.js" defer></script>
	
	<?php 
		$default_overlay = get_stylesheet_directory_uri() . '/images/overlays/01.png';
	?>
	<script>
		$(document).ready(function(){
			$("body").vegas({
				preload: true,
				overlay: '<?php echo $default_overlay; ?>',
				transitionDuration: 4000,
				delay: 10000,
				slides: [
			        	{ src: "<?php echo get_stylesheet_directory_uri(); ?>/images/slider02.jpg" }
				]
			});
		});
	</script>
</body>
</html>