	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-12 col-lg-6">
					<a href="<?php echo home_url(); ?>" class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
					</a>
					<p><?php the_field('footer_text', 'option');?></p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-3">
					<h6 class="title">Meniu</h6>
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
