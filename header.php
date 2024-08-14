<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<script src="<?php echo get_stylesheet_directory_uri() . '/dist/main.js'; ?>"></script>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/dist/main.css'; ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="root">
	
<?php get_template_part('template-parts/top-nav');