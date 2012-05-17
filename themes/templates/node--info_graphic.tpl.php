<?php if($teaser): ?>
<div class="span3 small-mol-resize">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-yellow">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p><?php print $node->field_sub_page_summary_title['und'][0]["value"]; ?></p>
				<div class="icon icon-00"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>