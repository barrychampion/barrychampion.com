<?php use Roots\Sage\Config; use Roots\Sage\Wrapper; ?>

<?php get_template_part( 'templates/head'); ?>

<body class="projects archive">
	<?php do_action( 'get_header'); get_template_part( 'templates/header'); ?>

	<section class="wrap content" role="document">

		<h1 class="ph"><?php post_type_archive_title(); ?></h1>
		<div class="controls">
			<label>Filter:</label>

			<button class="filter" data-filter="all">All</button>
			<button class="filter" data-filter=".freelance">Freelance</button>
			<button class="filter" data-filter=".emap">Emap</button>
			<button class="filter" data-filter=".hostelbookers">HostelBookers</button>
			<button class="filter" data-filter=".personal">Personal</button>

			<!--<label>Sort:</label>

			<button class="sort" data-sort="myorder:asc">Asc</button>
			<button class="sort" data-sort="myorder:desc">Desc</button>-->
		</div>
		<main class="main" role="main">
			<?php include Wrapper\template_path(); ?>
		</main>

	</section>

	<?php get_template_part( 'templates/footer'); wp_footer(); ?>
</body>

</html>