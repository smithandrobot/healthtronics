<?php
	
function resources_handler($a, $b)
{
    watchdog('resources_handler', 'resources_handler');
    var_dump($a);
    var_dump($b);
    print 'resources callback';
    drupal_render_page(theme('resources'));
    //drupal_render(node_view($node, 'teaser'));
}
?>