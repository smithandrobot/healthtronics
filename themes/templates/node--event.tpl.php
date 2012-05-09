<?php
	$block 			= block_load('block', 2);
	$output 		= drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	$location_name	= $node->field_location_name['und'][0]['value'];
	$time 			= date('M j, Y', $node->field_date_unix_timestamp['und'][0]['value']);
	$address 		= $node->field_physical_address['und'][0]['value'];
	
	print $output;
?>
<?php if($teaser): ?>
<div class="small-mol-resize span3">
	<a href="#">
		<div class="small-molecule mol-border-grey">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p>
					<div class="dotdotdot" style="height: auto; width: auto; ">
						<?php print $node->field_summary['und'][0]['value']; ?>
					</div>
				</p>
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
							<a id="back-button" href="/events">Back to Events</a>
							<div id="event-map-container" class="map" data-location="<?php print $node->field_physical_address['und'][0]['value']; ?>">
								<p id="map-loading-status">Loading Map...</p>
							</div>
						</div>
						<div id="event-detail-content" class="span6">
							<div id="date-title-container" class="clearfix">
								<div id="date-square">
									<span class="month"><?php print date('M', $node->field_date_unix_timestamp['und'][0]['value']); ?></span>
									<span class="day"><?php print date('j', $node->field_date_unix_timestamp['und'][0]['value']); ?></span>
								</div>
								<h2><?php print $node->title; ?></h2>
							</div>
							<h3 class="date-location">
							<?php
								print $time . '<br />';
								if($location_name !== NULL)
								{ 
									print $location_name . ' ';
								}
								print $node->field_physical_address['und'][0]['value'];
							?>
							</h3>
							<?php print $node->field_summary['und'][0]['value']; ?>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/sites/all/themes/healthtronicsv2/js/event_map/map.js"></script>
<?php endif?>