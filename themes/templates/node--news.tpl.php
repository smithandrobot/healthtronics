<?php
	$block 			= block_load('block', 2);
	$output 		= drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	$time 			= date('M j, Y', $node->field_news_date['und'][0]['value']);
	$month 			= date('M', $node->field_news_date['und'][0]['value']);
	$day 			= date('j', $node->field_news_date['und'][0]['value']);
	$year 			= date('Y', $node->field_news_date['und'][0]['value']);
	print $output;
?>
<?php if($teaser): ?>
<div class="span3 small-mol-resize-c">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-green">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p><?php print $time . ' ' . $node->field_summary['und'][0]['value']; ?></p>
				<div class="icon icon-00"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>

<?php if($view_mode == 'homepage_molecule'): ?>
<div class="span6">
	<div class="news-molecule mol-color-orangelight">
		<div class="inner clearfix">
			<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
				<div class="date">
					<div class="month"><?php print $month; ?></div>
					<div class="day"><?php print $day; ?></div>
					<div class="year"><?php print $year; ?></div>
				</div>
				<h1><?php print $node->title; ?></h1>
			</a>
			<div class="more-link"><a href="/news/news-results/all">More News <div class="arrow"></div></a></div>
		</div>
	</div>
</div>
<?php endif ?>

<?php if($view_mode=="feature_view"): ?>
<div class="span6">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="news-large-molecule mol-color-yellow mol-border-white">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p>
					<?php print $time; ?>
				</p>
				<div class="icon"></div>
			</div>
		</div>
	</a>
</div>
<?php endif ?>

<?php if($view_mode=="full"): ?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span3">
							<a id="back-button" href="/news/news-results/all">Back to News</a>
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
							<p class="news-summary"><?php print $node->body['und'][0]['summary']; ?></p>
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
