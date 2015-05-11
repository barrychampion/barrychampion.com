<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head-home'); ?>

<body class="home">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<?php dynamic_sidebar( 'hero'); ?>

	<section class="hero">
		<div class="hero-inner">
			<h1>I know, my surname really is<br><span>CHAMPION</span></h1>
			<p><?php bloginfo('description'); ?></p>
			<a href="<?php get_site_url(); ?>/bc/contact" class="button">Contact Barry</a>
		</div>
	</section>
	<section role="document">
		<main role="main">
			<?php include Wrapper\template_path(); ?>
			<div class="responsive container content">
				<?php
					$home = types_render_field("section-1", array("separator"=>";"));
					//Output home section 1
					echo $home;
				?>
			</div>
			<div class="web-design">
				<div class="container content">
				<?php
					$home = types_render_field("section-2", array("separator"=>";"));
					//Output home section 2
					echo $home;
				?>
				</div>
			</div>
			<div class="cms container content">
				<?php
					$home = types_render_field("section-3", array("separator"=>";"));
					//Output home section 3
					echo $home;
				?>
				</div>
		</main>
	</section>

	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>
</html>