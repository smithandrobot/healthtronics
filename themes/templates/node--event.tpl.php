<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */

	$block 			= block_load('block', 2);
	$output 		= drupal_render(_block_get_renderable_array(_block_render_blocks(array($block))));
	$location_name	= $node->field_location_name['und'][0]['value'];
	$time 			= date('M j, Y', $node->field_date_unix_timestamp['und'][0]['value']);
	$address 		= $node->field_physical_address['und'][0]['value'];
	//print $output;
	//print $view_mode;
?>

<?php if($teaser): ?>
<div class="small-mol-resize">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-orange">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<?php print $node->field_summary['und'][0]['value']; ?>
				<div class="arrow"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>

<?php if($view_mode == 'list_view'): ?>
<div class="small-mol-resize">
	<a href="/<?php print drupal_lookup_path('alias','node/'.$node->nid); ?>">
		<div class="small-molecule mol-border-orange">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<?php print $node->field_summary['und'][0]['value']; ?>
				<div class="icon icon-02"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>


<?php if($view_mode == 'full'): ?>
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
							<div id="event-detail-body">
							<?php print $node->field_summary['und'][0]['value']; ?>
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
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="/sites/all/themes/healthtronicsv2/js/event_map/map.js"></script>
<?php endif?>
