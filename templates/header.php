<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="header" role="banner">
    <a href="<?= esc_url(home_url('/')); ?>" class="logo">Barry<br><strong>Champion</strong><span> - <?php bloginfo('description'); ?></span></a>
    <a class="primary-nav-trigger">
		<span class="menu-icon"></span>
	</a> <!-- primary-nav-trigger -->
	<nav role="navigation">
	  <?php
	  if (has_nav_menu('primary_navigation')) :
		wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'primary-nav']);
	  endif;
	  ?>
	</nav>
</header>