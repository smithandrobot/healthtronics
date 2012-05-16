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
	// Get the two most recent news items
	$most_recent_news_result = views_get_view_result('news_two_results','news_two_result');
	//var_dump($pager);
?>
<div class="news-header clearfix">
	<h1>Latest News</h1>
</div>
<!-- Last 2 News Items -->
<div class="row">
	<?php print render(node_view( node_load($most_recent_news_result[0]->nid), 'feature_view')); ?>
	<?php print render(node_view( node_load($most_recent_news_result[1]->nid), 'feature_view')); ?>
</div>
<div class="row">
	<div class="span12">
		<div class="news-filter clearfix">
			<ul>
				<li class="first">SHOW:</li>
				<li><a href="#">All</a></li>
				<li><a href="#">Urology</a></li>
				<li><a href="#">Lithotripsy</a></li>
				<li><a href="#">Technology</a></li>
				<li><a href="#">Treatment</a></li>
			</ul>
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
			}
			?>
			</div>
		</div>
	</div>
</div>
<?php print $pager; ?>
<div class="row">
	<div class="news-molecules-nav clearfix">
		<div class="span6">
			<div class="prev">
				<a href="#">Previous</a>
			</div>
		</div>
		<div class="span6">
			<div class="next">
				<a href="#">Next</a>
			</div>
		</div>
	</div>
</div>