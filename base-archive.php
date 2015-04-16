<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body <?php body_class(); ?>>
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<section class="container" role="document">
		<main class="content" role="main">
			<?php include Wrapper\template_path(); ?>
		</main>
		<!-- /.main -->
	</section>
	<!-- /.container -->

	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>