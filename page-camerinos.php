<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block">
		<div class="single-header block">
			<!-- comienza gallery -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php echo get_post_gallery(); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="singlecontentleft block bg-fff">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php
			    $content = strip_shortcode_gallery( get_the_content() );                                        
			    $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) );
				echo $content;
			?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>