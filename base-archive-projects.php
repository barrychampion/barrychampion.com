<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body class="projects archive">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>
	
	<section class="wrap content" role="document">
		
		<h1 class="ph"><?php post_type_archive_title(); ?></h1>
		
		<main class="main" role="main">
			<?php include Wrapper\template_path(); ?>
		</main>
		
	</section>
	
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>