<?php

?>


<?php 
	// $block = block_load('block', 2);
	// $output = drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	// print $output;
	//var_dump($node->field_info_graphics['und']);
	print '<h2 id="title">' . $node->field_sub_page_summary_title['und'][0]["value"] . '</h2>';
	print '<div id="subpage-body-summary">' . $node->body['und'][0]["summary"] . '</div>';
	$i 			= 0;
	$colors 	= array('color-purple', 'color-orange', 'color-green');
	$colorIndex	= 0;
	$activeClass = '';
?>
<?php if(count($node->field_info_graphics) > 0): ?>
<div id="carousel" class="carousel carousel-top-margin mol-border-white">
	<div class="carousel-inner">
	<?php foreach($node->field_info_graphics['und'] as $infoGraphic): ?>
		<?php
			$activeClass = ($i === 0) ? 'active' : '';
		?>
		<div class="item <?php print $activeClass; ?>">
			<div class="stat">
				<h1 class="<?php print $colors[$colorIndex]; ?>"><?php print $infoGraphic["node"]->field_info_graphic_statistic['und'][0]['value']; ?></h1>
				<p><?php print $infoGraphic["node"]->title; ?></p>
			</div>
		</div>
		<?php 
			++$i; 
			++$colorIndex;
			if ($colorIndex > count($colors)-1) $colorIndex = 0;
		?>
	<?php endforeach ?>
	</div>
	<a class="left carousel-control" href="#carousel" data-slide="prev"></a>
	<a class="right carousel-control" href="#carousel" data-slide="next"></a>
</div>
<?php endif ?>
<?php print '<div id="subpage-body">' . $node->body['und'][0]["value"] . '</div>'; ?>