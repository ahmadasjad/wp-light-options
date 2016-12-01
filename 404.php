<?php get_header(); ?>

	<div id="page-header-wrap">
	
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 class="page-title"><?php _e('404 Error: Not found', 'zeeFocus_language'); ?></h2>
		</div>
		
	</div>
	
	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">

			<div class="type-page">
				
				<div class="entry">
					<p><?php _e('The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for', 'zeeFocus_language'); ?></p>
					
					<h2><?php _e('Search', 'zeeFocus_language'); ?></h2>
					<?php get_search_form(); ?>

					<h2><?php _e('Recent Posts', 'zeeFocus_language'); ?></h2>
					<ul>
						<?php
							$recent_posts = wp_get_recent_posts(array('numberposts' => '8', 'post_status' => 'publish'));
							foreach( $recent_posts as $recent ) {
								echo '<li><a href="' . esc_url(get_permalink($recent['ID'])) . '" title="Look '.esc_attr($recent['post_title']).'" >' . $recent['post_title'] . '</a></li>';
							}
						?>
					</ul>
					
					<h2><?php _e('Pages', 'zeeFocus_language'); ?></h2>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>
				
			</div>

		</section>
		
		<?php get_sidebar(); ?>
		
	</div>

<?php get_footer(); ?>