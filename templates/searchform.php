<form role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
  <label><?php _e('Search for:', 'sage'); ?></label>
  <div>
    <input type="search" value="<?= get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
      <button type="submit"><?php _e('Search', 'sage'); ?></button>
  </div>
</form>
