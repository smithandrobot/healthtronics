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
	//print($vars['view_mode']);
	if(isset($node) && $vars['view_mode']=='full')
	{
	   	$url = url('node/'.$node->nid, array('absolute'=>TRUE));
		if(isset($node->body['und'][0]['safe_summary']))
		{
			$summary = strip_tags($node->body['und'][0]['safe_summary']);	
		}
		
		if(isset($node->field_summary['und'][0]['value']))
		{
			$summary = $node->field_summary['und'][0]['value'];
		}
		
	   	$title = strip_tags($node->title);
		add_meta($summary, $title, $url);
	}
}

/*
 * Add meta tags to view pages (this method is called inside the view.tpl file)
**/
function preprocess_view($summary, $title, $url)
{
	add_meta($summary, $title, $url);
}

function add_meta($summary, $title, $url)
{
	$image = url('/sites/all/themes/healthtronicsv2/images/logo_ht.png', array('absolute'=>TRUE));
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