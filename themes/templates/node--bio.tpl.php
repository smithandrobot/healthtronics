<?php
$name = $node->field_first_name['und'][0]["value"] . ' ' . $node->field_last_name['und'][0]["value"];
?>

<?php if($teaser): ?>
<div class="span3 small-mol-resize-c">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-yellow">
			<div class="inner">
				<h1><?php  print $name; ?></h1>
				<?php print $node->field_sub_page_summary_title['und'][0]["value"]; ?>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>