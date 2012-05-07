<?php
// $Id: block.tpl.php,v 1.10 2010/04/26 14:10:40 dries Exp $

/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - $block->subject: Block title.
 * - $content: Block content.
 * - $block->module: Module that generated the block.
 * - $block->delta: An ID for the block, unique within each module.
 * - $block->region: The block region embedding the current block.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - block: The current template type, i.e., "theming hook".
 *   - block-[module]: The module generating the block. For example, the user module
 *     is responsible for handling the default user navigation block. In that case
 *     the class would be "block-user".
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - $zebra: Same output as $block_zebra but independent of any block region.
 * - $block_id: Counter dependent on each block region.
 * - $id: Same output as $block_id but independent of any block region.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 * - $block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see template_process()
 */
	$node = menu_get_object();
	if($node && $node->nid)
	{
		//print 'node id: ' . $node->nid;
	}
?>
<div id="share" class="share-molecule collapse">
	<div class="container stripe">
		<div class="container">
			<div class="row">
				<div class="span12">
					<div class="share-headline">
						<div class="inner">
							<img src="/sites/all/themes/healthtronicsv2/images/arrow_share.png"> Share this page
						</div>
					</div>
					<div class="row">
						<div class="span4">
							<div class="inner">
								<label>Email to humans.</label>
								<input type="text" placeholder="To (email address)">
								<input type="text" placeholder="Sender's Email">
							</div>
						</div>
						<div class="span5">
							<div class="inner clearfix">
								<label>Message &amp; Preview:</label>
								<textarea>Hello, Here is the resources I mentioned at our last meeting. HealthTronics Technology Resources Library</textarea>
								<button class="share-email-btn">submit</button>
							</div>
						</div>
						<div class="span2">
							<div class="inner">
								share links go here
							</div>
						</div>
						<div class="span1">
							<div class="close-btn">
								<a href="#" data-toggle="collapse" data-target="#share"><img src="/sites/all/themes/healthtronicsv2/images/close_btn.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>