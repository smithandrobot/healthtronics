<?php 
	$i 			= 0;
	$colors 	= array('color-purple', 'color-orange', 'color-green');
	$colorIndex	= 0;
	$activeClass = '';
	//('block', 'healthtronicsv2_contact_form');
	$showContact = $node->field_show_contact_form['und'][0]["value"];
	$contactForm = NULL;
	
	//var_dump($block);
	if($showContact) 
	{
		$block = module_invoke('healthtronicsv2_contact_form', 'block_view', 'contact_block_form');
	}
	if($is_admin && $view_mode == 'full' )
	{
		print '<p><a href="/node/' . $node->nid . '/edit?destination=' . drupal_lookup_path('alias','node/'.$node->nid) . '">Edit this page</a></p>';
	}
?>

<?php if($teaser): ?>
<div class="span3 small-mol-resize-c">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-yellow">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p><?php print $node->field_sub_page_summary_title['und'][0]["value"]; ?></p>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>

<?php if($view_mode == 'full'): ?>
	<h2 id="title">
		<?php print $field_sub_page_summary_title[0]['value']; ?>
	</h2>
	<div id="subpage-body-summary">
		<?php print $body[0]["summary"]; ?>
	</div>
			
	<?php if(count($node->field_info_graphics) > 0): ?>
	<!-- Carousel -->
	<div id="carousel" class="carousel carousel-top-margin mol-border-white">
		<div class="carousel-inner">
		<?php foreach($node->field_info_graphics['und'] as $infoGraphic): ?>
			<?php $activeClass = ($i === 0) ? 'active' : ''; ?>
			<div class="item <?php print $activeClass; ?>">
				<div class="stat">
					<h1 class="<?php print $colors[$colorIndex]; ?>">
						<?php print $infoGraphic["node"]->field_info_graphic_statistic['und'][0]['value']; ?>
					</h1>
					<p>
						<?php print $infoGraphic["node"]->title; ?>
					</p>
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
	<!-- /Carousel -->
	<?php endif ?>
	
	<!-- Body  -->
	<div class="row">
		<div class="span6">
			<?php print '<div id="subpage-body">' . $node->body['und'][0]["value"] . '</div>'; ?>
		</div>
	</div>
	
	<?php
		if($showContact) 
		{
			print render($block);	
		}
	?>
	<!-- /Body -->
<?php endif ?>