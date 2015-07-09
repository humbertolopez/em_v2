<?php get_header(); ?>

<section id="producto" class="block">
	<div class="inner block">
		<h1><?php the_title(); ?></h1>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</section>

<?php get_footer(); ?>