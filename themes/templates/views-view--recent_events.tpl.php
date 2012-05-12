<?php
/**
 * @file views-view.tpl.php
 * Main view template
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
	// Get the last 5 events in the past
	$past_events = views_get_view('past_events', 'block');
	$past_events->set_display('block');
    $past_events->pre_execute();
    $past_events->execute();
	$past_events->result;
	
	$featured_event_result = views_get_view_result('recent_events', 'block');
	$featured_event = node_view( node_load($featured_event_result[0]->nid), 'list_view')
	// Get the most recent event closes to today's date
?>
<div id="grey-stripe">
	<div class="inner">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span6">
							<h2>Past Events</h2>
							<ul>
							<?php print $past_events->preview(); ?>
							</ul>
						</div>
						<div class="span6">
							<h2>Featured</h2>
							<?php print render($featured_event); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span12">
					<div class="row">
						<div class="span6">
							<div class="view-content">
							<h2>Most recent Nodes</h2>
							<?php if ($rows)
							{
								print '<li>' . $rows . '</li>';
							}
							?>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>