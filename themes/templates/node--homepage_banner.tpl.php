<?php

$image = '/sites/default/files/hero/' . $node->field_image_hero['und'][0]['filename'];
$link = '/' . $node->field_link['und'][0]['url'];
$link_title = $node->field_link['und'][0]['title'];

?>
<div id="large-mol-resize" class="span6" style="background-image:url(<?php print $image; ?>); background-repeat:no-repeat;">
	<div class="large-molecule">
		<a style="display:block;" href="<?php print  $link; ?>">
		<div class="large-molecule-copy">
			<div class="inner">
				<h1><?php print $node->body['und'][0]['value']; ?></h1>
				<p>
					<a href="<?php print  $link; ?>"><?php print $link_title; ?></a>
				</p>
				<div class="icon icon-00"></div>
			</div>
		</div>
		</a>
	</div>
</div>