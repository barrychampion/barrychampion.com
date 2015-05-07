<article class="project <?php
	$terms = get_the_terms( $post->ID , 'project-types' );
		foreach ( $terms as $term ) {
			echo strtolower($term->name).' ';
		}
	?>">
	<?php echo get_the_post_thumbnail(); ?>
	<header>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	</header>
</article>