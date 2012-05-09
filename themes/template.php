<?php

/**
 * Automatically rebuild the theme registry.
 * Uncomment to use during development.
 */
drupal_theme_rebuild();

function healthtronicsv2_process_page(&$vars)
{

    if (isset($vars['node'])) {
       //$node = $vars['node'];
       //$vars['section_title'] = _section_title(drupal_get_path_alias(), $node->title);
       //
       //if ($node->type == 'partner_page') {
       //    $vars['show_user_info'] = TRUE;
       //}
    } else {
        //$vars['section_title'] = _section_title(drupal_get_path_alias());
        //$mock_node = new stdClass;
        //$mock_node -> title = $vars['title'];
        //add_social_meta($mock_node);
    }

}
?>