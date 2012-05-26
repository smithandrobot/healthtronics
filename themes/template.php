<?php

/**
 * Automatically rebuild the theme registry.
 * Uncomment to use during development.
 */

/**
 * OG TAGS
 * og:title
 * og:type
 * og:image
 * og:url
 * og:description
 */
drupal_theme_rebuild();

function healthtronicsv2_preprocess_node(&$vars)
{
    $node = $vars['node'];
	$image = url('/sites/all/themes/healthtronicsv2/images/logo_ht.png', array('absolute'=>TRUE));
	//print($vars['view_mode']);
	if(isset($node) && $vars['view_mode']=='full')
	{
	   	// var_dump($node);
	   	$url = url('node/'.$node->nid, array('absolute'=>TRUE));
	   	$summary = strip_tags($node->body['und'][0]['safe_summary']);
	   	$title = strip_tags($node->title);
	   	
	   	$elements = array(
	   	       			'meta_desc' => array(
	   	       			    '#tag' => 'meta',
	   	       			    '#attributes' => array(
	   	       			        'name' => 'description',
	   	       			        'content' => $summary,
	   	       			    ),
	   	       			),
	   	       			'og_summary' => array(
	   	       			    '#tag' => 'meta',
	   	       			    '#attributes' => array(
	   	       			        'property' => 'og:description',
	   	       			        'content' => $summary,
	   	       			    ),
	   	       			),
	   	       			'og_url' => array(
	   	       			    '#tag' => 'meta',
	   	       			    '#attributes' => array(
	   	       			        'property' => 'og:url',
	   	       			        'content' => $url,
	   	       			    ),
	   	       			),
	   	       			'og_image' => array(
	   	       			    '#tag' => 'meta',
	   	       			    '#attributes' => array(
	   	       			        'property' => 'og:image',
	   	       			        'content' => $image,
	   	       			    ),
	   	       			),
	   	       			'og_title' => array(
	   	       			    '#tag' => 'meta',
	   	       			    '#attributes' => array(
	   	       			        'property' => 'og:title',
	   	       			        'content' => $title,
	   	       			    ),
	   	       			),
	   				);
	   				
	   	foreach ($elements as $k => $v) {
	   	    drupal_add_html_head($v, $k);
	   	}
	}
}
?>