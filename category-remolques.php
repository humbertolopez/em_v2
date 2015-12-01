<?php get_template_part('header-single'); ?>

<section id="remolques" class="block">
	<div class="innerproducto block contentcategory">
		<h1>Remolques con Sanitarios</h1>
		<p class="line">Los baños remolque de Escumovil® son una colección de vehículos que concentran las cualidades que se buscan al planear un evento: privacidad, comodidad, buen gusto y elegancia. Esta colección va desde vehículos pequeños para eventos de hasta 120 pesonas.</p>
		<?php
			$args = array(
				'category_name'  => 'remolques',
				'posts_per_page' => -1,
				'meta_key' => 'personas',
				'orderby' => 'meta_value_num title',
				'order' => 'ASC',
			);
			$cat_query = new WP_Query($args);
			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
		<div class="contentleft inner-contentleft sameheight">
			<a class="home-link" href="<?php the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php get_template_part('servicios-remolques-category'); ?>
				<div class="irbloque">
					<p>→</p>
				</div>
			</a>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>