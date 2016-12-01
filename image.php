<?php get_header(); ?>

	<div id="page-header-wrap">
	  	<div id="custom-header" class="container">
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('common'); ?>
		</div>
		
	  	<?php //themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<div class="entry clearfix">

					<a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'full' ); ?></a>
					<?php if ( !empty($post->post_excerpt) ) the_excerpt(); ?>
					<?php the_content(); ?>
					
					<div id="image-nav" class="clearfix">
						<span class="nav-previous"><?php previous_image_link( false, __( 'Previous' , 'zeeFocus_language' ) ); ?></span>
						<span class="nav-next"><?php next_image_link( false, __( 'Next' , 'zeeFocus_language' ) ); ?></span>
					</div>
					<p class="nav-return"><a href="<?php echo esc_url( get_permalink( $post->post_parent )); ?>" title="<?php _e('Return to Gallery', 'zeeFocus_language'); ?>" rel="gallery">
					<?php _e('Return to', 'zeeFocus_language'); ?> <?php echo get_the_title( $post->post_parent ); ?></a></p>

				</div>
				
			</article>
			
		<?php

			endwhile;
		
		endif; ?>
		
		
			
		<?php comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	