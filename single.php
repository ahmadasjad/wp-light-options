<?php get_header(); ?>

	<div id="page-header-wrap">
		
		<?php //themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">

		<?php // Display Default Page Header Title
			themezee_display_default_page_header(); ?>
		
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'single' );

			endwhile;
		
		endif; ?>
			
		<?php comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	