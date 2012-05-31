<?php

$image = '/sites/default/files/hero/' . $node->field_image_hero['und'][0]['filename'];
$link = '/' . $node->field_link['und'][0]['url'];
$link_title = $node->field_link['und'][0]['title'];

?>
<?php if($view_mode == 'teaser'): ?>
<div id="large-mol-resize" class="span6" style="background-image:url(<?php print $image; ?>); background-repeat:no-repeat;">
	<div class="large-molecule">
		<a style="display:block;" href="<?php print  $link; ?>">
			<div class="large-molecule-copy">
				<div class="inner">
					<h1><?php print strip_tags($node->body['und'][0]['value']); ?></h1>
					<p>
						<?php print $link_title; ?>
					</p>
					<div class="icon icon-00"></div>
				</div>
			</div>
		</a>
	</div>
</div>
<?php endif ?>