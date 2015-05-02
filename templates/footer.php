<footer class="footer" role="contentinfo">
	<div class="footer-links">
		<div class="first">
			<a href="<?= esc_url(home_url('/')); ?>"><img src="<?= get_template_directory_uri(); ?>/dist/images/barry-champion-face.svg" width="150px" height="186px" alt="Barry Champion SVG face" title="Barry Champion SVG cartoon face" class="svg-face"></a>
			<h3><a href="tel:07821143779">07821 143 779</a></h3>
			<!--<h4><a href="tel:01621834568">01621 834 568</a></h4>-->
			<a href="mailto:<?php echo antispambot(get_the_author_meta('user_email')); ?>"><?php echo antispambot(get_the_author_meta('user_email')); ?></a>
		</div>

		<div class="second">
			<?php dynamic_sidebar( 'sidebar-footer'); ?>
			
			<?php get_template_part('templates/social-links'); ?>
			
		</div>

	</div>
	<div class="footer-copy">
		<small>&copy; Copyright <?php echo date('Y'); ?>  <?php bloginfo( 'name' ); ?>. <a href="<?php echo site_url(); ?>/terms-conditions" title="Terms and Conditions">Terms and Conditions</a> - <a href="<?php echo site_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></small>
	</div>
</footer>