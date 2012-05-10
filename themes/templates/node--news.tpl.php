<?php
	$block 			= block_load('block', 2);
	$output 		= drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	$time 			= date('M j, Y', $node->field_news_date['und'][0]['value']);
	
	print $output;
?>
<?php if($teaser): ?>
<div class="small-mol-resize span3">
	<a href="#">
		<div class="small-molecule mol-border-grey">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<?php print $node->field_summary['und'][0]['value']; ?>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>

<?php if(!$teaser): ?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span3">
							<a id="back-button" href="/news">Back to News</a>
							<!--  -->
							<?php if(!empty($node->field_pull_quote['und'][0]['value'])): ?>
							<div id="sub-page-pull-quote">
							    <p class="quote orange">“Very cool marketing quote.”</p>
								<p class="citation">—Dr. Urology Austin</p>
							</div>
							<?php endif ?>
							<!--  -->
						</div>
						<div id="event-detail-content" class="span6">
							<div id="date-title-container" class="clearfix">
								<div id="date-square">
									<span class="month"><?php print date('M', $node->field_news_date['und'][0]['value']); ?></span>
									<span class="day"><?php print date('j', $node->field_news_date['und'][0]['value']); ?></span>
								</div>
								<h2><?php print $node->title; ?></h2>
							</div>
							<h3 class="date-location">
							<?php
								print $time;
							?>
							</h3>
							<div id="event-detail-body">
							<?php print $node->body['und'][0]['value']; ?>
							</div>
						</div>
						<div id="subpage-right-sidebar" class="span3">
							<p>Right Sidebar</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endif?>