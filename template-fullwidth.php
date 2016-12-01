<?php
/*
Template Name: Fullwidth Template
*/
?>
<?php get_header(); ?>

	<div id="page-header-wrap">
		
		<?php themezee_display_custom_header(); ?>
		
		<div id="page-header" class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
		</div>
		
	</div>
	
	<div id="wrap" class="container template-fullwidth">
		
		<section id="content" class="fullwidth" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<div <?php post_class(); ?>>

				<div class="entry clearfix">
					<?php the_content(); ?>
				</div>
				<?php wp_link_pages(); ?>
				
			</div>

		<?php endwhile; ?>

		<?php endif; ?>
		
		</section>

	</div>
	
<?php get_footer(); ?>	