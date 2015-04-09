<article class="project mix">
	<?php echo get_the_post_thumbnail( $page->ID, 'medium' ); ?>
  <header>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
</article>