<?php
$name = $node->field_first_name['und'][0]["value"] . ' ' . $node->field_last_name['und'][0]["value"];
$last_name = $node->field_last_name['und'][0]["value"];
?>

<?php if($teaser): ?>
<div class="span3 small-mol-resize-c">
	<a href="/<?php print 'our-company/our-story/leadership#' . $last_name; ?>">
		<div class="small-molecule mol-border-yellow">
			<div class="inner">
				<h2><?php  print $name; ?></h2>
				<?php print $node->field_sub_page_summary_title['und'][0]["value"]; ?>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>