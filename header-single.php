<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>
		<?php 
			if(is_home())
				{ echo bloginfo("name"); echo " — "; echo bloginfo("description"); }
			elseif(is_category("remolques") or is_category("portatiles"))
				{ echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			elseif(in_category("remolques"))
				{ echo "Remolque de sanitarios "; echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			elseif(in_category("portatiles"))
				{ echo "Baño portátil modelo "; echo wp_title(" — ",false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
			else { echo wp_title(" — ", false, right); echo bloginfo("name"); echo " "; echo bloginfo("description"); }
		?>
	</title>
	<!-- styles -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/nivo-slider.css">
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