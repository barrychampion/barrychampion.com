<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body <?php body_class(); ?>>
	<?php get_template_part( 'templates/outdated-browser'); ?>
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<section class="wrap container about-hero">
		<?php echo types_render_field("about-hero"); ?>
	</section>

	<section class="wrap container content" role="document">

		<main class="main" role="main">
			<?php include Wrapper\template_path(); ?>
		</main>

		<?php if (Config\display_sidebar()) : ?>
		<aside class="sidebar" role="complementary">
			<?php include Wrapper\sidebar_path(); ?>
		</aside>

		<?php endif; ?>

	</section>
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>