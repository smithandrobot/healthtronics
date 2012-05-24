<?php

/**
 * Automatically rebuild the theme registry.
 * Uncomment to use during development.
 */
drupal_theme_rebuild();

function healthtronicsv2_preprocess_node(&$vars)
{
	$element = array(
	    '#tag' => 'meta',
	    '#attributes' => array(
	        'property' => 'keywords',
	        'content' => 'Urology',
	    ),
	);

	drupal_add_html_head($element, 'meta_keywords');
}
?>