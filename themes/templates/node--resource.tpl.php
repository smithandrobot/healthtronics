<?php

	$summary = $node->field_summary['und'][0]['value'];
	$resource_type = taxonomy_term_load($node->field_resource_type['und'][0]['tid']);
	$file = '/sites/default/files/' . file_uri_target($node->field_file_reference['und'][0]['uri']);
	$resource = strtolower($resource_type->name);
	$video_link = isset($node->field_video_embed['und'][0]['value']) ? $node->field_video_embed['und'][0]['value'] : NULL;
	$image = isset($node->field_resource_thumbnail['und'][0]['uri']) ? $node->field_resource_thumbnail['und'][0]['uri'] : NULL;
	if(isset($image)) $image = '/sites/default/files/' . file_uri_target($image);
	
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
?>

<?php if($teaser && !isset($image) && $resource != 'video'): ?>
<!-- No Image BKG -->
<div class="span3 small-mol-resize-d">
	<a href="<?php print $file; ?>">
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


<?php if($teaser && isset($image)): ?>
<div class="span3 small-mol-resize-d">
	<a href="<?php print $file; ?>">
		<div style="background-image:url(<?php print $image; ?>);" class="video-molecule <?php print $color; ?>">
			<div class="video-molecule-description">
				<p><?php print $node->title; ?></p>
				<div class="video-molecule-content-background"></div>
				<div class="icon <?php print $icon; ?>"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>


<!-- NEW CODE SHOULD BE PUT BELOW FOR SIDE BAR -->
<?php if($view_mode=='side_bar' && isset($image)): ?>
<div class="span3 small-mol-resize-c">
	<a href="<?php print $file; ?>">
		<div style="background-image:url(<?php print $image; ?>);" class="video-molecule <?php print $color; ?>">
			<div class="video-molecule-description">
				<p><?php print $node->title; ?></p>
				<div class="video-molecule-content-background"></div>
				<div class="icon <?php print $icon; ?>"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>


<?php if($view_mode=='side_bar' && !isset($image) && $resource != 'video'): ?>
<div class="span3 small-mol-resize-c">
	<a href="<?php print $file; ?>">
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


<?php if($resource == 'video'): ?>
<div class="span3 small-mol-resize-c">
	<a class="video_open" data-toggle="modal" data-title="<?php print $node->title; ?>" data-summary="<?php print $summary; ?>" data-video="<?php print $video_link; ?>" href="<?php print $file; ?>">
		<?php $style = 'background-image: url(http://img.youtube.com/vi/' . substr($video_link, 16) . '/0.jpg);'; ?>
		<div class="video-molecule <?php print $color; ?>" style="<?php print $style; ?>">
			<div class="video-molecule-description">
				<p><?php print $node->title; ?></p>
				<div class="video-molecule-content-background"></div>
				<div class="icon <?php print $icon; ?>"></div>
			</div>
		</div>
	</a>
</div>
<?php endif?>