<?php
	
	function themezee_sections_general() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_general_header",
					"name" => __('Header Settings', 'zeeFocus_language'));
					
		$themezee_sections[] = array("id" => "themeZee_general_layout",
					"name" => __('Layout Settings', 'zeeFocus_language'));
					
		$themezee_sections[] = array("id" => "themeZee_general_css_section",
					"name" => __('Custom CSS Code', 'zeeFocus_language'));
					
		return $themezee_sections;
	}
	
	function themezee_settings_general() {

		$themezee_settings = array();
	
		### HEADER SETTINGS
		#######################################################################################
		$themezee_settings[] = array("name" => __('Logo Image', 'zeeFocus_language'),
						"desc" => __('Paste the full Image URL of your logo or click Upload Image. Leave this field blank to display the site title instead of a logo image.', 'zeeFocus_language'),
						"id" => "themeZee_general_logo",
						"std" => "",
						"type" => "image",
						"section" => "themeZee_general_header");

		$themezee_settings[] = array("name" => __('Show Tagline?', 'zeeFocus_language'),
						"desc" => __('Check this if you want to show your tagline(blog description) below the logo', 'zeeFocus_language'),
						"id" => "themeZee_general_tagline",
						"std" => "true",
						"type" => "checkbox",
						"section" => "themeZee_general_header");
						
		### LAYOUT SETTINGS
		#######################################################################################				
		$themezee_settings[] = array("name" => __('Default Page Header Title', 'zeeFocus_language'),
						"desc" => __('Enter here the page header title which is displayed on single blog post and blog index pages.', 'zeeFocus_language'),
						"id" => "themeZee_general_page_header",
						"std" => "Blog: Latest News",
						"type" => "text",
						"section" => "themeZee_general_layout");
						
		$themezee_settings[] = array("name" => __('Sidebar Options', 'zeeFocus_language'),
						"desc" => "",
						"id" => "themeZee_general_sidebars",
						"std" => 'right',
						"type" => "radio",
						'choices' => array(
									'left' => __('Left Sidebar', 'zeeFocus_language'),
									'right' => __('Right Sidebar', 'zeeFocus_language')),
						"section" => "themeZee_general_layout"
						);
						
		$themezee_settings[] = array("name" => __('Footer Content', 'zeeFocus_language'),
						"desc" => __('Enter the content which is displayed in the footer here.', 'zeeFocus_language'),
						"id" => "themeZee_general_footer",
						"std" => "Place your Footer Content here",
						"type" => "html",
						"section" => "themeZee_general_layout");
						
		### CUSTOM CSS
		#######################################################################################					
		$themezee_settings[] = array("name" => __('Custom CSS', 'zeeFocus_language'),
						"desc" => __('Place your Custom CSS code here.', 'zeeFocus_language'),
						"id" => "themeZee_general_css",
						"std" => "",
						"type" => "textarea",
						"section" => "themeZee_general_css_section");
										
		return $themezee_settings;
	}

?>