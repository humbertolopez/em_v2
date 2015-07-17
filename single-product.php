<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block">

		<div class="block">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<div class="contentleft">
			<h1><?php the_title(); ?></h1>
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<div class="contentleft">
			<?php get_template_part('dimensiones'); ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>