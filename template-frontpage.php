<?php
/*
Template Name: Frontpage Template
*/
?>
<?php get_header(); ?>

<?php $options = get_option('zeefocus_options'); // Get Theme Options from Database ?>

	<div id="frontpage-image-wrap">
	
		<?php // Show Custom Header image as frontpage image if option is checked
		if( get_header_image() != '' and (isset($options['themeZee_frontpage_image_source']) and $options['themeZee_frontpage_image_source'] == "header" )) : ?>
			<div id="custom-header" class="container header-image">
				<img src="<?php echo get_header_image(); ?>" />
			</div>
		<?php endif; ?>

		<?php // Show Individual Image as frontpage image if option is checked and images was uploaded
		if( ( isset($options['themeZee_frontpage_image_source']) and $options['themeZee_frontpage_image_source'] == "upload" ) and
			( isset($options['themeZee_frontpage_image_upload']) and $options['themeZee_frontpage_image_upload'] <> '' )) : ?>
			<div id="frontpage-individual-image" class="container header-image">
				<img src="<?php echo esc_url($options['themeZee_frontpage_image_upload']); ?>" />
			</div>
		<?php endif; ?>
		
		<?php // Show Frontpage Header Title
		if( isset($options['themeZee_frontpage_page_header']) and $options['themeZee_frontpage_page_header'] <> "" ) : ?>
			
			<div id="page-header" class="container">
				<h2 class="page-title"><?php echo esc_attr($options['themeZee_frontpage_page_header']); ?></h2>
			</div>
			
		<?php endif; ?>

	</div>
	
	<div id="wrap" class="container template-frontpage">
	
	<?php // Display Frontpage Intro text
	if(isset($options['themeZee_frontpage_intro_text']) and $options['themeZee_frontpage_intro_text'] != '' ) : ?>
		<div id="frontpage-intro" class="clearfix">
			
			<?php // Check if Frontpage Intro Button should be displayed
			if(isset($options['themeZee_frontpage_button_text']) and $options['themeZee_frontpage_button_text'] != '' ) : ?>
				
				<p id="frontpage-intro-left" class="frontpage-intro-text">
					<?php echo do_shortcode(wp_kses_post($options['themeZee_frontpage_intro_text'])); ?>
				</p>
				<div id="frontpage-intro-button">
					<a href="<?php echo esc_url($options['themeZee_frontpage_button_destination']); ?>">
						<?php echo esc_attr($options['themeZee_frontpage_button_text']); ?>
					</a>
				</div>
				
			<?php else : ?>
				
				<p class="frontpage-intro-text"><?php echo do_shortcode(wp_kses_post($options['themeZee_frontpage_intro_text'])); ?></p>
				
			<?php endif; ?>
			
		</div>
	<?php endif; ?>

	<?php // Display Frontpage Widgets #1
	if(is_active_sidebar('frontpage-widgets-one')) : ?>
		<div id="frontpage-widgets-one" class="frontpage-widgets clearfix">
			<?php dynamic_sidebar('frontpage-widgets-one'); ?>
		</div>
	<?php endif; ?>
	
	</div>
	
<?php get_footer(); ?>	