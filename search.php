<?php get_header(); ?>

	<div id="page-header-wrap">
		
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
		<?php if (have_posts()) : ?>
			<h2 id="search-title" class="archive-title">
				<?php printf( __( 'Search Results for: %s', 'zeeFocus_language' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h2>
		<?php else : ?>
			<h2 id="search-title" class="archive-title">
				<?php printf( __( 'Search Results for: %s', 'zeeFocus_language' ), '<span>' . get_search_query() . '</span>' ); ?>
			</h2>
		<?php endif; ?>
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			get_template_part( 'loop', 'index' );
		
			endwhile;
			
			themezee_display_pagination();

		else : ?>

			<div class="post">
				
				<div class="entry">
					<p><?php _e('No matches. Please try again, or use the navigation menus to find what you search for.', 'zeeFocus_language'); ?></p>
				</div>
				
			</div>

		<?php endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>	