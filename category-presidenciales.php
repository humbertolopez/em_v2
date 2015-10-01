<?php get_template_part('header-single'); ?>

<section id="presidenciales" class="block">
	<div class="innerslider block contentcategory">
		<div id="sliderpresidenciales" class="nivoSlider">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/01.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/02.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/03.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/04.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/05.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/06.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/img/sliderpresidenciales/07.jpg">
		</div>
		<h1>Sanitarios Presidenciales</h1>
		<p class="line">Soluciones únicas para momentos extraordinarios. Lleva tu evento al sitio que sueñas, donde siempre lo has imaginado. Tu boda en la playa, celebraciones a la orilla de un lago o a mitad de un bosque en primavera. Escumovil® con sus Sanitarios Modulares Presidenciales le da solución a tus deseos.</p>
		<?php
			$args = array(
				'category_name'  => 'presidenciales',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'ASC',
			);
			$cat_query = new WP_Query($args);
			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
		<div class="contentleft inner-contentleft">
			<p class="diagrama">
				<img src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>">
			</p>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
			<?php get_template_part('dimensiones'); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>