<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body id="mixItUoo" class="projects archive">

	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>
	<section class="content" role="document">
		<div classs="page-header">
			<h1><?php post_type_archive_title( $display ); ?></h1>
		</div>
		<main role="main">
			<?php include Wrapper\template_path(); ?>
		</main>
		<!-- /.main -->
	</section>
	<!-- /.container -->
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>