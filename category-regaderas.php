<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block contentcategory">
		<h1><?php single_cat_title(); ?></h1>
		<p class="line"><?php echo category_description( get_category_by_slug('regaderas')->term_id ); ?></p>
		<?php
			$args = array(
				'category_name'  => 'regaderas',
				'posts_per_page' => -1,
				'orderby' => 'name',
				'order' => 'ASC',
			);
			$cat_query = new WP_Query($args);
			if($cat_query->have_posts()) : while($cat_query->have_posts()) : $cat_query->the_post();
		?>
		<div class="contentleft inner-contentleft bg-fff">
			<h2><?php the_title(); ?></h2>
			<p class="diagrama">
				<img src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>">
			</p>	
			<?php get_template_part('dimensiones'); ?>
			<?php the_content(); ?>			
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>