<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 */
?>
<?php if ($search_results): ?>
<div class="news-header clearfix">
	<h1>Search Results</h1>
</div>
<div class="row">
	<div class="span12">
		<div class="news-molecules-container clearfix">
			<div class="row">
    			<?php print $search_results; ?>
			</div>
		</div>
	</div>
</div>
  <?php print $pager; ?>
<?php else : ?>
  <h2><?php print t('We couldn\t find anything that matched your term');?></h2>
  <?php // print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>

<script>
	
	// If there isn't a 'Previous' link,
	// push the 'Next' link to the right
	
	if(!$(".news-molecules-nav li").hasClass("prev"))
	{
		$(".news-molecules-nav li").css("width", "100%");
	}

</script>