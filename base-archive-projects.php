<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body class="projects">

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <section class="content" role="document">
        <main role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
    </section><!-- /.container -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>