<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head-home'); ?>

<body class="home" role="document">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>

	<section class="hero">
		<div class="hero-inner">
			<h1>Yes, my surname really is<br><span>CHAMPION</span></h1>
			<p>UX/UI Website Designer and Front End Developer in Chelmsford, Essex and London</p>
			<a href="<?php get_site_url(); ?>/bc/contact" class="button">Contact Barry</a>
		</div>
	</section>

	<main role="main">
		<?php include Wrapper\template_path(); ?>
	</main>
	<!-- /.main -->
	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>