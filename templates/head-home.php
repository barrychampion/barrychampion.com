<!doctype html>
<html class="front-page no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="theme-color" content="#4c5e74">
		<link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= esc_url(get_feed_link()); ?>">
		<?php wp_head(); ?>
		<link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/dist/images/favicon.ico">
	</head>
