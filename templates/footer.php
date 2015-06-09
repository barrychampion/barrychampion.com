<footer class="footer" role="contentinfo">
	<div class="footer-links">
		<div class="first">
			<a href="<?= esc_url(home_url('/')); ?>" title="Barry Champion SVG cartoon face"><img src="<?= get_template_directory_uri(); ?>/dist/images/barry-champion-face.svg" width="150" height="186" alt="Barry Champion SVG face" class="svg-face"></a>
			<h3><a href="tel:<?php $phone = types_render_usermeta_field("phone", array("raw"=>"true")); echo $phone; ?>"><?php $phone = types_render_usermeta_field("phone", array("raw"=>"true")); echo $phone; ?></a></h3>
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