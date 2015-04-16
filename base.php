<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body <?php body_class(); ?>>
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>
	<div class="wrap" role="document">
		<div class="content container" role="document">
			<main class="main" role="main">
				<?php include Wrapper\template_path(); ?>
			</main>
			<!-- /.main -->
			<?php if (Config\display_sidebar()) : ?>
			<aside class="sidebar" role="complementary">
				<?php include Wrapper\sidebar_path(); ?>
			</aside>
			<!-- /.sidebar -->
			<?php endif; ?>
		</div>
	</div>
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>