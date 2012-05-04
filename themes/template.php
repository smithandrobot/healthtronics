<?php

/**
 * Automatically rebuild the theme registry.
 * Uncomment to use during development.
 */
drupal_theme_rebuild();

// intercept menu building
function healthtronicsv2_menu_tree__main_menu($menu)
{
	return '<ul class="nav nav-pills">' . $menu['tree'] . '</ul>';
}

function healthtronicsv2_menu_tree__menu_footer_our_company($menu)
{
	return '<ul class="unstyled footer-ul">' . $menu['tree'] . '</ul>';
}


function healthtronicsv2_menu_tree__menu_physicians_menu($menu)
{
	return '<ul class="nav nav-secondary clearfix">' . $menu['tree'] . '</ul>';
}

function healthtronicsv2_menu_tree__menu_subnav_patients_menu($menu)
{
	return '<ul class="nav nav-secondary clearfix">' . $menu['tree'] . '</ul>';
}

function healthtronicsv2_menu_link__main_menu(array $variables)
{

    $element = $variables['element'];
    $sub_menu = '';

    if ($element['#below']) {
        $sub_menu = drupal_render($element['#below']);
    }

	if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && 
	      (empty($options['language']) || $options['language']->language == $language_url->language)) {
		$element['#attributes']['class'][] = "active";
	  }

    $output = l($element['#title'], $element['#href'], $element['#localized_options']);
    return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

?>