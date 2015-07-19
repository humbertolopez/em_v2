<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block">
		<h1><?php the_title(); ?></h1>
		<div class="single-header block">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<div class="contentleft">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</div>
		<?php if(in_category('remolques')) {
			?>
				<?php get_template_part('servicios-remolques'); ?>
			<?php
			}
		?>
		<div class="contentleft">
			<img src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>">
		</div>
		<div class="contentleft">
			<?php get_template_part('dimensiones'); ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>