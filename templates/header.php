<?php use Roots\Sage\Nav\NavWalker; ?>
<header class="header" role="banner">

	<a href="<?= esc_url(home_url('/')); ?>" class="logo">Barry<br><strong>Champion</strong></a>

	<nav role="navigation">
		<?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=> 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'primary-nav']); endif; ?>
		<?php if (has_nav_menu( 'secondary_navigation')) : wp_nav_menu([ 'theme_location'=> 'secondary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'secondary-nav']); endif; ?>
	</nav>

	<a class="primary-nav-trigger">
		<span class="menu-icon"></span>
	</a>

</header>