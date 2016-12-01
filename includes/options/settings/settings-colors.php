<?php
	
	function themezee_sections_colors() {
		$themezee_sections = array();
		
		$themezee_sections[] = array("id" => "themeZee_colors_schemes",
					"name" => __('Predefined Color Schemes', 'zeeFocus_language'));
		
		return $themezee_sections;
	}
	
	function themezee_settings_colors() {
	
		$color_schemes = array(
			'#151515' => __('Black', 'zeeFocus_language'),
			'#1562a5' => __('Blue', 'zeeFocus_language'),
			'#725639' => __('Brown', 'zeeFocus_language'),
			'#2d912e' => __('Green', 'zeeFocus_language'),
			'#9215a5' => __('Purple', 'zeeFocus_language'),
			'#dd3333' => __('Red', 'zeeFocus_language'),
			'#009b91' =>  __('Teal', 'zeeFocus_language'),
			'default' => __('Standard', 'zeeFocus_language'));
		
		$themezee_settings = array();
	
		### COLOR SETTINGS
		#######################################################################################
							
		$themezee_settings[] = array("name" => __('Set Color Scheme', 'zeeFocus_language'),
						"desc" => __('Please select your color scheme here.', 'zeeFocus_language'),
						"id" => "themeZee_color_scheme",
						"std" => "default",
						"type" => "select",
						'choices' => $color_schemes,
						"section" => "themeZee_colors_schemes"
						);
		
		return $themezee_settings;
	}

?>