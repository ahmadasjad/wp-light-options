
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php the_post_thumbnail('featured_image'); ?>
		
		<h2 class="post-title-wrap clearfix">
			<span class="meta-date">
				<?php printf(__('<time datetime="%1$s">%2$s</time>', 'zeeFocus_language'), 
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() )
					);
				?>
			</span>
			<span class="post-title"><?php the_title(); ?></span>
		</h2>

		<div class="entry clearfix">
			<?php the_content(); ?>
			<div class="page-links"><?php wp_link_pages(); ?></div>
			<!-- <?php trackback_rdf(); ?> -->			
		</div>
		
		<?php themezee_display_post_tags(); ?>
		
		<div class="postmeta"><?php themezee_display_postmeta(); ?></div>

	</article>