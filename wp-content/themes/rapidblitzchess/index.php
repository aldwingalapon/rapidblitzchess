<?php get_header(); ?>

	<div id="main_content" class="homepage frontpage">
		<div class="container">
			<div class="row" id="feature">
				<div class="col-md-4">
					<div class="content">
						<h3>Players List</h3>
						<div class="icon shake"><a href="<?php echo get_settings('home'); ?>/tournament/players/" title="Players List" rel="bookmark"><i class="fa fa-list" aria-hidden="true"></i></a></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="content">
						<h3>Schedule</h3>
						<div class="icon shake"><a href="<?php echo get_settings('home'); ?>/tournament/schedule/" title="Schedule" rel="bookmark"><i class="fa fa-calendar" aria-hidden="true"></i></a></div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="content">
						<h3>Results</h3>
						<div class="icon shake"><a href="<?php echo get_settings('home'); ?>/tournament/result-and-rankings/" title="Results" rel="bookmark"><i class="fa fa-line-chart" aria-hidden="true"></i></a></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix clear"></div>
	</div>
	<div class="clearfix clear"></div>

<?php wp_reset_query(); ?>

<?php get_footer(); ?>