		
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_post_thumbnail('featured_image'); ?></a>
		
		<div class="post-title-wrap clearfix">
			<span class="meta-date">
				<?php printf(__('<a href="%1$s" title="%2$s" rel="bookmark"><time datetime="%3$s">%4$s</time></a>', 'zeeFocus_language'), 
						esc_url( get_permalink() ),
						esc_attr( get_the_time() ),
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() )
					);
				?>
			</span>
			<h2 class="post-title"><a href="<?php esc_url(the_permalink()) ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</div>

		<div class="entry clearfix">
			<?php the_content(__('<span>Read more</span>', 'zeeFocus_language')); ?>
			<div class="page-links"><?php wp_link_pages(); ?></div>
		</div>
		
		
		<div class="postmeta"><?php themezee_display_postmeta(); ?></div>

	</article>