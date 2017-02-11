		<footer id="main_footer">
			<div id="top_footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sponsors') ) : ?>
							<?php endif; ?>
						</div>
						<div class="clearfix clear" style="padding-bottom: 2rem;"></div>
					</div>
					<div class="clearfix clear"></div>
					<div class="row">
						<div class="col-md-2 static">
							<a href="<?php echo get_settings('home'); ?>" title="<?php echo (($blogname && $blogdesc) ? $blogname . ' - ' . $blogdesc : $blogname); ?>" class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_sm.png" title="<?php echo (($blogname && $blogdesc) ? $blogname . ' - ' . $blogdesc : $blogname); ?>" alt="<?php echo (($blogname && $blogdesc) ? $blogname . ' - ' . $blogdesc : $blogname); ?>" width="100" height="100" /></a>
						</div>
						<div class="col-md-10 sidebars col-xs-12">
							<div class="col-sm-7 col-xs-6">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer One') ) : ?>
								<?php endif; ?>
							</div>
							<div class="col-sm-5 col-xs-6">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Two') ) : ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="clearfix clear"></div>
					</div>
					<div class="clearfix clear"></div>
				</div>
				<div class="clearfix clear"></div>
			</div>
			<div class="clearfix clear"></div>
			<div id="bottom_footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php if(get_field('show_social_network_links', 'option')) { ?>
								<div class="col-md-12 social-network">
									<?php
										if( have_rows('social_network', 'option' ) ): ?>
											<ul class="footer_sn">
												<?php
													while ( have_rows('social_network', 'option' ) ) : the_row();
														$sn_name = get_sub_field('sn_name');
														$sn_type = get_sub_field('sn_type');
														$sn_url = get_sub_field('sn_url');
												?>
													<li class="<?php echo $sn_type; ?>"><a href="<?php echo $sn_url ?>" title="<?php echo $sn_name ?>" rel="nofollow" target="_blank"></a></li>
												<?php endwhile; ?>
											</ul>
									<?php
										endif;
									?>
								</div>
								<div class="clearfix clear"></div>
							<?php } ?>						
						</div>
						<div class="clearfix clear"></div>
						<div class="col-md-12">
							<?php if(get_field('show_logos', 'option')) { ?>
								<div class="col-md-12 footer-logos">
									<?php
										if( have_rows('logos', 'option' ) ): ?>
											<ul class="footer_logos">
												<?php
													while ( have_rows('logos', 'option' ) ) : the_row();
														$logo_name = get_sub_field('logo_name');
														$logo_image = get_sub_field('logo_image');
														$logo_image_url = $logo_image['url'];
														$logo_image_width = $logo_image['width'];
														$logo_image_height = $logo_image['height'];
														$logo_description = get_sub_field('logo_description');
														$logo_url = get_sub_field('logo_url');
												?>
													<li class="footer_logo"<?php echo($logo_description ? ' data-toggle="tooltip" data-placement="top" data-original-title="<h3>' . $logo_name . '</h3><p>' . $logo_description . '</p>"' : ''); ?>><?php echo($logo_url ? '<a href="' . $logo_url . '" target="_blank" rel="nofollow" title="' . $logo_name . '"><img class="logo" src="' . $logo_image_url . '" alt="' . $logo_name . '" title="' . $logo_name . '" width="' . $logo_image_width . '" height="' . $logo_image_height . '" /></a>' : '<img class="logo" src="' . $logo_image_url . '" alt="' . $logo_name . '" title="' . $logo_name . '" width="' . $logo_image_width . '" height="' . $logo_image_height . '" />'); ?></li>
												<?php endwhile; ?>
											</ul>
									<?php
										endif;
									?>
								</div>
								<div class="clearfix clear"></div>
							<?php } ?>						
						</div>
						<div class="clearfix clear"></div>
						<div class="col-md-12 copyright">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Copyright') ) : ?>
							
							<?php endif; ?>
						</div>
						<div class="clearfix clear"></div>
						<div class="col-md-12 footer-menu">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Menu') ) : ?>
							
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
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.counteverest.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/scripts.js" defer></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/user-interactions.js" defer></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-4698485-61', 'auto');
	  ga('send', 'pageview');
	</script>
	
	<?php 
		$slides =  array();
		$default_overlay = get_stylesheet_directory_uri() . '/images/overlays/01.png';
		if(get_field('load_custom_background', $the_ID)) {
			if( have_rows('background_slider_images', $the_ID ) ):
				while ( have_rows('background_slider_images', $the_ID ) ) : the_row();
					$slider_image = get_sub_field('slider_image', $the_ID );
					array_push($slides, "{ src: '" . $slider_image['url'] . "' }");
				endwhile;
			else :
			endif;
		} else{
			
			array_push($slides, "{ src: '" . get_stylesheet_directory_uri() . "/images/slider02.jpg' }");
		}
	?>
	<script>
		$(document).ready(function(){
			var slides = [<?php echo ''.implode(', ', $slides).'' ?>];

			$("body").vegas({
				preload: true,
				overlay: '<?php echo $default_overlay; ?>',
				transitionDuration: 4000,
				delay: 10000,
				slides: slides
			});
		});
	</script>
</body>
</html>