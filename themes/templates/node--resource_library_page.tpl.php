<?php 
	print '<br />Start node template';
	$title = 'Ma';
	print_r($node->title);
	$view = views_get_view('lithotripsy_resources');
	//output the top three items in the view with the node title as an argument
	print views_embed_view('lithotripsy_resources', 'block');
	print '<br />End node template<br />';
	// access the view
?>