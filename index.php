<?php get_header(); ?>

	<div id="page-header-wrap">
		<div id="custom-header" class="container-fluid">
			<?php if( function_exists('cyclone_slider') ) cyclone_slider('common'); ?>
		</div>
	    <?php //themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			
		<?php // Display Default Page Header Title
			themezee_display_default_page_header(); ?>
				
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		 
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'index' );
		
			endwhile;
			
		themezee_display_pagination();

		endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	