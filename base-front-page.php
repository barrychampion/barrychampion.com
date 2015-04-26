<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head-home'); ?>

<body class="home">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>

	<section class="hero">
		<div class="hero-inner">
			<h1>Yes, my surname really is<br><span>CHAMPION</span></h1>
			<p><?php bloginfo('description'); ?></p>
			<a href="<?php get_site_url(); ?>/bc/contact" class="button">Contact Barry</a>
		</div>
	</section>

	<section role="document">
		<main role="main">
			<?php include Wrapper\template_path(); ?>
		</main>
	</section>

	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>