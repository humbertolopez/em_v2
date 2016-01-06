<?php get_template_part('header-single'); ?>

<section id="portatiles" class="block">
	<div class="innerproducto block contentcategory">
		<h1>Sanitarios Portátiles</h1>
		<p class="line">Dentro de la gama Escumovil® de sanitarios portátiles ofrecemos soluciones móviles para todo tipo de evento. En sitios de construcción, con el modelo Estándar. O en reuniones sociales, donde contamos con el modelos Súper Lujo: un baño portátil amplio y completo, con todas las comodidades.</p>
		<?php
			$args = array(
				'category_name'  => 'portatiles',
				'posts_per_page' => -1,
				'orderby' => 'date',
				'order' => 'ASC',
				'has_password' => false
			);
			$cat_query = new WP_Query($args);
			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
		<div class="contentleft inner-contentleft item-align">
			<a class="home-link" href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('medium'); ?>
				<h2><?php the_title(); ?></h2>
				<div class="irbloque">
					<p>→</p>
				</div>
			</a>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>