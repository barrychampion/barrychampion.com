<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="ph"><?php the_title(); ?>
            <?php if (types_render_field('website-address')) : ?>
                <a href="<?php $url = types_render_field("website-address", array("raw"=>"true")); echo $url; ?>" target="_blank" title="Open Link"><i class="icon-link"></i></a>
            <?php endif; ?>
            </h1>
        </header>
        <?php the_content(); ?>
        <footer>
        <hr>
        <nav class="project-nav">
            <?php next_post_link( '%link', '<i class="icon-arrow-left"></i>' ); ?>
            <?php previous_post_link( '%link', '<i class="icon-arrow-right"></i>' ); ?>
        </nav>

       </footer>
        <?php comments_template('/templates/comments.php'); ?>
    </article>
<?php endwhile; ?>