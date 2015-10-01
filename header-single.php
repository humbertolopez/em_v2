<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?php bloginfo(''); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/magia.js"></script>
	<!-- styles -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic,700,300' rel='stylesheet' type='text/css'>
	<!-- styles -->
	<!-- este es el header para single pages -->
</head>

<body id="single">

	<!-- contacto -->
	<?php get_template_part('info-contacto'); ?>
	<!-- /contacto -->
	<!-- header -->
	<?php get_template_part('header-part-single'); ?>
	<!-- /header -->