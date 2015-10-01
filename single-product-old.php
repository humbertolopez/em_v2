<?php get_template_part('header-single'); ?>

<section id="producto" class="block">
	<div class="innerproducto block">
		<h1><?php the_title(); ?></h1>
		<div class="single-header block">
			<?php the_post_thumbnail('medium'); ?>
			<div>
			<?php
				function add_gallery(){
				global $post;			 
				    if( $post->post_type == 'post' ){			 
				        $content = $post->post_content;			 
				        if( is_single() && is_main_query() ){
				            $pattern = get_shortcode_regex();
				            preg_match('/'.$pattern.'/s', $content, $matches);
				            if ( isset( $matches[2] ) && is_array($matches) && $matches[2] == 'gallery') {
				                //shortcode is being used
				                echo do_shortcode( $matches['0'] );
				            }
				        }
				    }
				}
			?>
			</div>
		</div>
		<div class="contentleft">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<?php
				function remove_gallery( $content = null ){
				    global $post;
				 
				    if( is_single() && is_main_query() && $post->post_type == 'post' ){
				        $pattern = get_shortcode_regex();
				        preg_match('/'.$pattern.'/s', $content, $matches);
				        if ( isset($matches[2]) && is_array($matches) && $matches[2] == 'gallery') {
				            //shortcode is being used
				            $content = str_replace( $matches['0'], '', $content );
				        }
				    }
				    return $content;
				}
				add_filter( 'the_content', 'remove_gallery' );
			?>
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