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
	$section = explode('/', $_SERVER['REQUEST_URI']);
	$show_headline = strpos($_SERVER['REQUEST_URI'], 'find-an-md') === FALSE;
	
	
	//print('show headline' . $show_headline);
?>
<div id="find-physician-form">
	<?php if($show_headline): ?>
	<h2>Find an M.D.</h2>
	<?php endif ?>
<form action="/patients/find-an-md/search" method="post">
	<select name="physician_type">		
	  <option value="BPH_YN">Enlarged Prostate (BPH)</option>
	  <option value="ProstateCancer_YN">Prostate Cancer</option>
	  <option value="KidneyStones_YN">Kidney Stones</option>
	  <option value="KidneyCancer_YN">Kidney Cancer</option>
	  <option value="OtherCancer_YN">Cancer (other)</option>
	  <!-- <option value="LiverCancer_YN">Liver Cancer</option> -->
	  <!-- <option value="LungCancer_YN">Lung Cancer</option> -->
	  <!-- <option value="PALLINT_YN">PALLINT_YN</option> -->
	</select>
	<input id="find-physician-zip" type="text" name="zip" value="Type in your zip code" 
				onblur="if (this.value == '') {this.value = 'Type in your zip code';}"
                onfocus="if (this.value == 'Type in your zip code') {this.value = '';}">
	<input type="submit" value="Find">
</form>
</div>