	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-6">
					<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
					</a>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<h6 class="title">Menu</h6>
					<?php arredo_footer_nav_left(); ?>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<h6 class="title">
						Susisiekite
					</h6>
					<?php arredo_footer_nav_right(); ?>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
