<h1><?php post_type_archive_title( $display ); ?></h1>

<?php if (!have_posts()) : ?>
  <p class="alert">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </p>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>