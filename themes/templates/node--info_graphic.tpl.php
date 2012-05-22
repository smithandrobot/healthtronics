<?php
	$colors = array('color-purple', 
					'color-orange',
					'color-green',
					'color-orangelight',
					'color-blue',
					'color-yellow',
					'color-grey'
					);	
	$index = rand(0, count($colors)-1);
?>
<?php if($teaser): ?>
<div class="item">
	<div class="stat">
		<h1 class="<?php print $colors[$index]; ?>"><?php print $node->field_info_graphic_statistic['und'][0]['value']; ?></h1>
		<p><?php print $node->title; ?></p>
	</div>
</div>
<?php endif?>