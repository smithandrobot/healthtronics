<?php 
	$i 			= 0;
	$colors 	= array('color-purple', 'color-orange', 'color-green');
	$colorIndex	= 0;
	$activeClass = '';
	$showContact = $node->field_show_contact_form['und'][0]["value"];
	$contactForm = NULL;
	
	if($showContact) 
	{
		$block = module_invoke('healthtronicsv2_contact_form', 'block_view', 'contact_block_form');
	}
	
	// output a link to edit this node if user is an admin, 
	// and we're not looking at a teaser view
	if($is_admin && $view_mode == 'full' )
	{
		print '<p><a href="/node/' . $node->nid . '/edit?destination=' . drupal_lookup_path('alias','node/'.$node->nid) . '">Edit this page</a></p>';
	}
	$info_graphics = get_weighted_nodes($node->field_info_graphics['und']);
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
	<div id="carousel" class="carousel carousel-top-margin">
		<div class="carousel-inner">
		<?php foreach($info_graphics as $info_graphic): ?>
		    <?php print render( node_view( node_load($info_graphic->nid), 'teaser') );  ?>
		<?php endforeach ?>
		</div>
		<a class="left carousel-control" href="#carousel" data-slide="prev"></a>
		<a class="right carousel-control" href="#carousel" data-slide="next"></a>
	</div>
	<!-- /Carousel -->
	<?php endif ?>
	<div class="mol-border-white"></div>
	<!-- Body  -->
	
			<?php print '<div id="subpage-body">' . $node->body['und'][0]["value"] . '</div>'; ?>
		
	
	<?php
		if($showContact) 
		{
			print render($block);	
		}
	?>
	<!-- /Body -->
<?php endif ?>