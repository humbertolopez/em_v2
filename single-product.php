<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block">
		<?php 
			if(in_category('portatiles')) {
				?>
					<h1>Unidad Portátil <?php the_title(); ?></h1>
				<?
			} else if(in_category('remolques')) {
				?>
					<h1>Remolque con Sanitarios <?php the_title(); ?></h1>
				<?
			}
		?>
		<div class="single-header block">
			<!-- el thumb -->
			<div class="portada-header">
				<?php the_post_thumbnail('portada'); ?>
			</div>
			<!-- comienza gallery -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php echo get_post_gallery(); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="contentleft">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php
			    $content = strip_shortcode_gallery( get_the_content() );                                        
			    $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) );
				echo $content;
			?>
			<?php endwhile; endif; ?>
		</div>
		<?php if(in_category('remolques')) {
			?>		
				<?php get_template_part('servicios-remolques'); ?>
			<?php
			}
		?>
		<div class="contentleft">
			<?php
				if(in_category('remolques')) {
					?>
					<p>
						<img class="diagrama block" src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>">
					</p>
					<?
				}
			?>
			<?php get_template_part('dimensiones'); ?>
		</div>
		<?php if(in_category('portatiles')){
			?>
				<div class="contentleft">
					<p>
						<img class="diagrama block" src="<?php echo get_post_meta(get_the_ID(),'meta-slide',true) ?>">
					</p>
					<h2>Usos.</h2>
					<ul>
						<li>Concentraciones masivas como conciertos, campamentos, festivales y ferias.</li>
						<li>Eventos deportivos, maratones y carreras.</li>
						<li>Sitios en construcción.</li>
					</ul>
				</div>
			<?
			}
		?>
	</div>
</section>

<?php get_footer(); ?>