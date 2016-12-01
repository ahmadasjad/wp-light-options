<?php
/***
 * Template Tags
 *
 * This file contains several template functions which are used to print out specific HTML markup
 * in the theme. You can override these template functions within your child theme.
 *
 */

 
// Display Custom Header
if ( ! function_exists( 'themezee_display_custom_header' ) ):
	
	function themezee_display_custom_header() {
		
		// Check if page is displayed and featured header image is used
		if( is_page() && has_post_thumbnail() ) :
		?>
			<div id="custom-header" class="container">
				<?php the_post_thumbnail('custom_header_image'); ?>
			</div>
<?php
		// Check if there is a custom header image
		elseif( get_header_image() ) :
		?>
			<div id="custom-header" class="container">
				<img src="<?php echo get_header_image(); ?>" />
			</div>
<?php 
		endif;

	}
	
endif;


// Display default Page Header Title
if ( ! function_exists( 'themezee_display_default_page_header' ) ):
	
	function themezee_display_default_page_header() {
		
		$options = get_option('zeefocus_options');
			
		if( is_single() ):
    	?>
			<h2 class="page-title"><?php echo esc_attr(get_the_title()); ?></h2>
<?php
    elseif( isset($options['themeZee_general_page_header']) and $options['themeZee_general_page_header'] <> "" ) : ?>
			
			<h2 class="page-title"><?php echo esc_attr($options['themeZee_general_page_header']); ?></h2>
			
	<?php else: ?>
		
			<h2 class="page-title"><?php echo _e('Blog', 'zeeFocus_language'); ?></h2>
		
	<?php endif;

	}
	
endif;


// Display Postmeta Data
if ( ! function_exists( 'themezee_display_postmeta' ) ):
	
	function themezee_display_postmeta() { ?>
		
		<span class="meta-category">
			<?php printf(__('Posted in %1$s', 'zeeFocus_language'), get_the_category_list(', ')); ?>
		</span>
		
		<span class="meta-author sep">
		<?php printf(__('by <a href="%1$s" title="%2$s" rel="author">%3$s</a>', 'zeeFocus_language'), 
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				esc_attr( sprintf( __( 'View all posts by %s', 'zeeFocus_language' ), get_the_author() ) ),
				get_the_author()
			);
		?>
		</span>

	<?php if ( comments_open() ) : ?>
		<span class="meta-comments sep">
			<?php comments_popup_link( __('Leave a comment', 'zeeFocus_language'),__('One comment','zeeFocus_language'),__('% comments','zeeFocus_language') ); ?>
		</span>
	<?php endif; ?>
	<?php
		edit_post_link(__( 'Edit Post', 'zeeFocus_language' ));
	}
	
endif;


// Display Post Tags
if ( ! function_exists( 'themezee_display_post_tags' ) ):
	
	function themezee_display_post_tags() {
		
		$tag_list = get_the_tag_list(__( 'Tagged with: ', 'zeeFocus_language' ), '');
		if ( $tag_list ) : ?>
			<div class="meta-tags">
				<?php echo $tag_list; ?>
			</div>
	<?php 
		endif;
		
	}
	
endif;

	
// Display Content Pagination
if ( ! function_exists( 'themezee_display_pagination' ) ):
	
	function themezee_display_pagination() { 
		
		global $wp_query;
		
		if ( $wp_query->max_num_pages > 1 ) :

			if(function_exists('wp_pagenavi')) : // if PageNavi is activated
				
				wp_pagenavi();
			
			else : // Otherwise, use traditional Navigation
			?>
				
				<div class="post-pagination clearfix">
          
					
					<span class="post-pagination-alignleft"><?php previous_posts_link (__(' &laquo; Recent Entries', 'zeeFocus_language')) ?></span>
					<span class="post-pagination-alignright"><?php next_posts_link(__(' Older Entries &raquo;', 'zeeFocus_language')) ?></span>
				</div>
				
	<?php 	
			endif;
		endif;
		
	}
	
endif;


?>