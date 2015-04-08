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
    <section class="hero">
        <div class="hero-inner">
			<div class="hero-copy">
				<h1>Website Design &amp; WordPress Development</h1>
				<p>UX/UI Website Designer, Developer in Chelmsford, Essex and London</p>	
			</div>
		<!--<a href="<?php get_site_url(); ?>/services" class="button">Services</a> --><a href="<?php get_site_url(); ?>/bc/contact" class="button">Contact Barry</a>
        </div>
    </section>
	  
	<?php dynamic_sidebar('hero'); ?>

    <section class="container" role="document">
        <main class="content" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
    </section><!-- /.container -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>