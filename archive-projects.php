<h1><?php post_type_archive_title( $display ); ?></h1>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/projects', get_post_type() != 'projects' ? get_post_type() : get_post_format() ); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
