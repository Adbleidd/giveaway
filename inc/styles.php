<?php

function load_styles()
{
	wp_enqueue_style(
		'giveaway',
		CDK_THEME_URL . 'assets/css/style.min.css',
		array(),
		time()
	);

	wp_enqueue_style(
		'style',
		CDK_THEME_URL . 'style.css',
		array('giveaway'),
		time()
	);
}
add_action('wp_enqueue_scripts', 'load_styles');
