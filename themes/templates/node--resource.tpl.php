<?php

	$summary = $node->field_summary['und'][0]['value'];
	$resource_type = taxonomy_term_load($node->field_resource_type['und'][0]['tid']);
	$file = '/sites/default/files/' . file_uri_target($node->field_file_reference['und'][0]['uri']);
	$resource = strtolower($resource_type->name);
	$video_link = $node->field_video_embed['und'][0]['value'];

	switch($resource)
	{
		case 'video':
			$icon 	='icon-01';
			$color 	= 'mol-border-purple';
			$file 	= '#videoModal';
			break;
		case 'link':
			$icon 	='icon-02';
			$color 	= 'mol-border-blue';
			break;
		case 'image':
			$icon 	='icon-04';
			$color 	= 'mol-border-grey';
			break;
		default:
			$icon 	='icon-03';
			$color 	='mol-border-green';
			break;
	}
	// $color
	/*
field_summary
field_resource_type
field_file_reference
field_resource_thumbnail
field_video_embed
field_site_categories
Video = molecule_icon_01.png - mol-border-purple icon-01
File Download = molecule_icon_03.png - mol-border-green icon-03
Offsite Link = molecule_icon_02.png - mol-border-blue
Image = molecule_icon_04.png - mol-border-grey


	*/
?>
<?php if($teaser): ?>
<div class="span3 small-mol-resize-d">
	<?php if($resource == 'video'): ?>
	<a class="video_open" data-toggle="modal" data-video="<?php print $video_link; ?>" href="<?php print $file; ?>">
	<?php else: ?>
	<a href="<?php print $file; ?>">
	<?php endif; ?>
		<div class="small-molecule news-teaser <?php print $color; ?>">
			<div class="inner">
				<h1><?php print $node->title; ?></h1>
				<p><?php print $summary; ?></p>
				<div class="icon <?php print $icon; ?>"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>