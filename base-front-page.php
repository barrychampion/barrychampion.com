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
			<h1>Yes... My surname really is<br><span>CHAMPION</span></h1>
			<h2>UX/UI Website Designer, Developer in Chelmsford, Essex and London</h2>	
			<a href="<?php get_site_url(); ?>/bc/contact" class="button">Contact Barry</a>
        </div>
    </section>
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>