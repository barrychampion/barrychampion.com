<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body <?php body_class(); ?>>
	<?php get_template_part( 'templates/outdated-browser'); ?>
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>
	
	<section class="wrap container content" role="document">
		
		<main class="main" role="main">
			<?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
		</main>
		
	</section>
	
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>
</html>
