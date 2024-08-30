<?php
	if (class_exists('ACF')) {
		add_action('acf/init', 'register_acf_block_types');
	}
	
	function register_acf_block_types() {
		acf_register_block_type(array(
			'name'              => 'testimonial',
			'title'             => __('Testimonial'),
			'description'       => __('A custom testimonial block.'),
			'render_template'   => 'template-parts/blocks/testimonial/testimonial-block.php',
			'icon'              => 'editor-paste-text',
			'keywords'          => array('testimonial', 'product'),
		));
	}
	
	function enqueue_testimonial_block_styles() {
		wp_enqueue_style('testimonial-block', get_template_directory_uri() . '/css/testimonial-block.css');
	}
	add_action('wp_enqueue_scripts', 'enqueue_testimonial_block_styles');
?>