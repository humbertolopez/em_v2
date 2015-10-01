<?php get_template_part('header-single'); ?>

<section id="page" class="block">
	<div class="innerproducto block">
		<?php
			if(have_posts()) : while(have_posts()) : the_post();
		?>
		<div class="content block">
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>