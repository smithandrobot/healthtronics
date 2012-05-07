<?php

?>


<?php 
	// $block = block_load('block', 2);
	// $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	// print $output;
	var_dump($node);
	print '<h2>' . $node->field_sub_page_summary_title['und'][0]["value"] . '</h2>';
	print $node->body['und'][0]["summary"];
	print $node->body['und'][0]["value"];
?>