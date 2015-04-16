<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body <?php body_class(); ?>>
	<div class="wrap" role="document">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>
		<div class="content container">
			<main class="main" role="main">
				<?php get_template_part( 'templates/page', 'header'); ?>
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
		<!-- /.wrap -->
	</div>
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>