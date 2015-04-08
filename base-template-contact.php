<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
	
		<?php
		  do_action('get_header');
		  get_template_part('templates/header');
		?>
	
	<?php dynamic_sidebar('hero'); ?>
	  
	<div class="content container" role="document">
        <main class="main" role="main">
		  <?php get_template_part('templates/page', 'header'); ?>
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
	  <?php if (Config\display_sidebar()) : ?>
		  <aside class="sidebar" role="complementary">
			<?php include Wrapper\sidebar_path(); ?>
		  </aside><!-- /.sidebar -->
	  <?php endif; ?>
    </div><!-- /.wrap -->
	  <div class="content container">
		  <hr>
		  <p>I live in Mayland, Chelmsford, Essex and I often commute to work in London.</p>
	  </div>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9895.157752471006!2d0.7677138500000001!3d51.68199715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d91ff8b71ff475%3A0xe4993ae4af1102d1!2sMayland%2C+Chelmsford%2C+Essex+CM3!5e0!3m2!1sen!2suk!4v1428000732837" width="100%" height="450" frameborder="0" style="border:0"></iframe>
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>