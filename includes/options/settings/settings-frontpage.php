<?php
	
	function themezee_sections_frontpage() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_frontpage_template",
					"name" => __('Activate Frontpage Template', 'zeeFocus_language'));
					
		$themezee_sections[] = array("id" => "themeZee_frontpage_image",
					"name" => __('Frontpage Image', 'zeeFocus_language'));
		
		$themezee_sections[] = array("id" => "themeZee_frontpage_header",
					"name" => __('Frontpage Header', 'zeeFocus_language'));
					
		$themezee_sections[] = array("id" => "themeZee_frontpage_intro",
					"name" => __('Frontpage Intro', 'zeeFocus_language'));
					
		$themezee_sections[] = array("id" => "themeZee_frontpage_widgets",
					"name" => __('Frontpage Widgets', 'zeeFocus_language'));

		return $themezee_sections;
	}
	
	function themezee_settings_frontpage() {
	
		
		### FRONTPAGE Template
		#######################################################################################
		$themezee_settings[] = array("name" => __('Turn on Frontpage Template?', 'zeeFocus_language'),
						"desc" => __('Check this to automatically display the frontpage template on HOME page.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_activate",
						"std" => "false",
						"type" => "checkbox",
						"section" => "themeZee_frontpage_template");
		
		### FRONTPAGE Image
		#######################################################################################
		$themezee_settings[] = array("name" => __('Frontpage Image Source', 'zeeFocus_language'),
						"desc" => __('Choose which image(s) the frontpage template should display.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_image_source",
						"std" => "header",
						"type" => "radio",
						'choices' => array(
									'header' => __('Custom Header Image (from Appearance > Header)', 'zeeFocus_language'),
									'upload' => __('Individual Image uploaded below', 'zeeFocus_language')),
						"section" => "themeZee_frontpage_image"
						);
		
		$themezee_settings[] = array("name" => __('Frontpage Image', 'zeeFocus_language'),
						"desc" => __('Upload an individual frontpage image here. You have to select "Individual Image" above to display it. Image should be 1140x400 pixels.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_image_upload",
						"std" => "",
						"type" => "image",
						"section" => "themeZee_frontpage_image");	
								
		### FRONTPAGE TITLE
		#######################################################################################	
		$themezee_settings[] = array("name" => __('Frontpage Header Title', 'zeeFocus_language'),
						"desc" => __('Enter here the frontpage header title which is displayed below the frontpage image.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_page_header",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_frontpage_header");
		
		
		### FRONTPAGE INTRO
		#######################################################################################					
		$themezee_settings[] = array("name" => __('Frontpage Intro', 'zeeFocus_language'),
						"desc" => __('Enter here the Text of the Frontpage Intro.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_intro_text",
						"std" => "",
						"type" => "html",
						"section" => "themeZee_frontpage_intro");
						
		$themezee_settings[] = array("name" => __('Frontpage Intro Button Text', 'zeeFocus_language'),
						"desc" => __('Enter here the Text of the Frontpage Intro Button. Leave blank to hide to hide the button.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_button_text",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_frontpage_intro");

		$themezee_settings[] = array("name" => __('Frontpage Intro Button Destination', 'zeeFocus_language'),
						"desc" => __('Enter here the URL to which the Frontpage Intro Button should point to.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_button_destination",
						"std" => "",
						"type" => "text",
						"section" => "themeZee_frontpage_intro");

		### FRONTPAGE WIDGETS
		#######################################################################################		
		$themezee_settings[] = array("name" => __('About Frontpage Widgets', 'zeeFocus_language'),
						"desc" => __('Please note: You can configure your widgets to be displayed on the frontpage template on <b>Appearance > Widgets</b>.', 'zeeFocus_language'),
						"id" => "themeZee_frontpage_widgets_info",
						"type" => "info",
						"std" => '',
						"section" => "themeZee_frontpage_widgets");

		return $themezee_settings;
	}

?>