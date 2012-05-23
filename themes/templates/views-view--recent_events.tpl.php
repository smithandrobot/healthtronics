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
	// $past_events = views_get_view('past_events', 'block');
	// $past_events->set_display('block');
	//     $past_events->pre_execute();
	//     $past_events->execute();
	// $past_events->result;
	
	//past_events = views_get_view_result('past_events', 'block');
	//featured_event_result = views_get_view_result('recent_events', 'block');
	//featured_event = node_view( node_load($featured_event_result[0]->nid), 'list_view')
	// Get the most recent event closes to today's date
	//print render($content["my_view_machine_name_entity_view_1"]);
	//print var_dump($attachment_before);
	$upcoming_event = views_get_view_result('single_upcoming_event','block_1');
	$past_events = views_get_view_result('past_events', 'block');
	$i = 0;
	$class = array('date-color-orange', 'date-color-orangelight', 'date-color-yellow');
?>
<div class="row">
	<div class="span6">
		<div class="events-molecule">
			<div class="header clearfix">
				<h1>Recent Events</h1>
			</div>
			<?php foreach($past_events as $event):?>
				<?php $colorClass=$class[$i]?>
			<div class="event clearfix <?php print $colorClass; ?>">
				<?php print render(node_view( node_load($event->nid), 'list_view')); ?>
			</div>
				<?php ++$i; ?>
			<?php endforeach ?>
		</div>
	</div>
	<div class="span6">
		<div class="events-molecule">
			<div class="header clearfix">
				<h1>Upcoming Events</h1>
			</div>
			<?php print render(node_view( node_load($upcoming_event[0]->nid), 'feature_view')); ?>
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="news-filter clearfix">
			<!-- <ul>
				<li class="first">SHOW:</li>
				<li><a href="#">All</a></li>
				<li><a href="#">Urology</a></li>
				<li><a href="#">Lithotripsy</a></li>
				<li><a href="#">Technology</a></li>
				<li><a href="#">Treatment</a></li>
			</ul> -->
		</div>
	</div>
</div>
<div class="row">
	<div class="span12">
		<div class="news-molecules-container clearfix">
			<div class="row">
			<?php if ($rows)
			{
				print $rows;
			} else {
					print '<h3 class="span6">No results found</h3>';
			}
			?>
			</div>
		</div>
	</div>
</div>
<?php
	// print theme('pager');
	print $pager;
?>