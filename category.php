<?php get_header(); ?>

	<div id="page-header-wrap">
		
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 id="category-title" class="archive-title">
				<?php printf(__('Category Archives: %s', 'zeeFocus_language'), '<span>' . single_cat_title( '', false ) . '</span>'); ?>
			</h2>
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