<?php
/***
 * Custom Color Options
 *
 * Get custom colors from theme options and embed CSS color settings 
 * in the <head> area of the theme. 
 *
 */


// Add Custom Colors
add_action('wp_head', 'themezee_custom_colors');
function themezee_custom_colors() { 
	
	// Get Theme Options
	$options = get_option('zeefocus_options');
	
	// Get Color Scheme and set color scheme to default if nothing is selected)
	$color_scheme = $options['themeZee_color_scheme'] <> '' ? esc_attr($options['themeZee_color_scheme']) : 'default';
	
	$link_color = $color_scheme;
	$header_color = $color_scheme;
	$navi_color = $color_scheme;
	$post_title_color = $color_scheme;
	$button_color = $color_scheme;
	$frontpage_color = $color_scheme;
	$widget_title_color = '#333333';
	$widget_link_color = $color_scheme;

	// Set CSS settings except color scheme is default (=> default colors are already defined in style.css)
	if( $color_scheme <> 'default') :
	
		$color_css = '<style type="text/css">';
		$color_css .= '
			a, a:link, a:visited, .post-pagination span a, .comment a:link, .comment a:visited {
				color: '. $link_color .';
			}
			.wp-pagenavi .current {
				background-color: '. $link_color .';
			}
			#page-header-wrap, #frontpage-image-wrap, #footer-wrap {
				background-color: '. $header_color .';
			}
			#mainnav-menu a:hover {
				color: '. $navi_color .';
			}
			#mainnav-menu ul a:hover {
				background-color: '. $navi_color .';
			}
			#logo a .site-title, .post-title a:hover, .post-title a:active {
				color: '. $post_title_color .';
			}
			.post-title-wrap .meta-date, #comments .comments-title, #respond #reply-title, .comment-author .fn {
				background-color: '. $post_title_color .';
			}
			input[type="submit"], .meta-tags a, .more-link span, .read-more, #commentform #submit {
				background-color: '. $button_color .';
			}
			#frontpage-posts .type-post .post-title-wrap .post-title a:hover {
				color: '. $frontpage_color .';
			}
			#frontpage-intro-button a, #frontpage-entry .frontpage-entry-title,
			#frontpage-widgets-one .widget .widgettitle, #frontpage-posts-head,
			#frontpage-posts .type-post .post-title-wrap .meta-date {
				background-color: '. $frontpage_color .';
			}
			.widgettitle {
				color: '. $widget_title_color .';
			}
			.widget a:link, .widget a:visited {
				color: '. $widget_link_color .';
			}
			.widget-tabnav li a {
				background-color: '. $widget_link_color .';
			}
			@media only screen and (max-width: 60em) {
				#navi-wrap {
					background: '. $header_color .';
				}
				#mainnav-menu a:hover {
					color: #fff;
					background: '. $navi_color .';
				}
			}
		';
		$color_css .= '</style>';
		
		// Print Color CSS
		echo $color_css;
	
	endif;
}