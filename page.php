<?php get_header(); ?>

	<div id="page-header-wrap">
	
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
		</div>
		
	</div>

	<div id="wrap" class="container">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
				<div class="entry clearfix">
					<?php the_content(); ?>
					<div class="page-links"><?php wp_link_pages(); ?></div>
				</div>

			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		
		<?php comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>	