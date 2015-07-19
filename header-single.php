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
	<header>
		<div id="nav" class="block">
			<a href="#portada"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"></a>
			<ul id="menu">
				<li class="menu-item">
					<a href="#eventos">Productos para Eventos</a>
					<ul class="sub-menu">
						<li class="sub-menu-item"><a href="">Remolques con Sanitarios</a></li>
						<li class="sub-menu-item"><a href="">Sanitarios Presidenciales</a></li>
						<li class="sub-menu-item"><a href="">Camerinos</a></li>
						<li class="sub-menu-item"><a href="">Sanitarios Portátiles</a></li>
					</ul>
				</li>
				<li class="menu-item">
					<a href="#industriales">Productos Industriales</a>
					<ul class="sub-menu">
						<li class="sub-menu-item"><a href="">Sanitario Industrial Individual</a></li>
						<li class="sub-menu-item"><a href="">Sanitario Industrial Doble</a></li>
						<li class="sub-menu-item"><a href="">Oficinas Móviles</a></li>
						<li class="sub-menu-item"><a href="">Dormitorios</a></li>
						<li class="sub-menu-item"><a href="">Centros de Lavado</a></li>
						<li class="sub-menu-item"><a href="">Baños para Uso Rudo</a></li>
						<li class="sub-menu-item"><a href="">Regaderas Móviles</a></li>
					</ul>
				</li>
				<li class="menu-item">
					<a href="">Proyectos Especiales</a>
					<ul class="sub-menu">
						<li class="sub-menu-item"><a href="">Remolques con Publicidad</a></li>
						<li class="sub-menu-item"><a href="">Construcciones Especiales</a></li>
						<li class="sub-menu-item"><a href="">Baños Urbanos</a></li>
						<li class="sub-menu-item"><a href="">Servicios Sanitarios en Casetas de Cobro</a></li>
					</ul>
				</li>
				<li class="menu-item">
					<a href="">La Empresa</a>
				</li>
				<li class="menu-item">
					<a href="">Contacto</a>
				</li>
			</ul>
		</div>
	</header>
	<!-- /header -->