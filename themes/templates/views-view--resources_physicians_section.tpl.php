<?php

// which section are we in
	$sectionURI = explode('/', $_SERVER['REQUEST_URI']);
	$section = $sectionURI[2];
	$replacements = array('-', '_');
	$section = strtolower(str_replace($replacements, " ", $section));
	$section = ucwords(strtolower($section));
	if($section === 'It Solutions') $section = 'IT Solutions';
	if($section === 'Equipment Services') $section = 'Equipment Services&rsquo;';
	$description = 'Browse case studies, videos, whitepapers, patient guides and physician guides from the leader in urology services and solutions.';
	
	switch($sectionURI[2])
	{
		case 'cryotherapy':
			$menu = 'menu-filters-cryotherapy';
			$title = 'Cryotherapy Resources';
			break;
		case 'equipment-services':
			$menu = 'menu-filters-equipment-services';
			$title = 'Equipment Services Resources';
			break;
		case 'it-solutions':
			$menu = 'menu-filters-it-solutions';
			$title = 'IT Solutions Resources';
			break;
		case 'lab-solutions':
			$menu = 'menu-filters-lab-solutions';
			$title = 'Lab Solutions Resources';
			break;
		case 'laser-treatments':
			$menu = 'menu-filters-lab-solutions';
			$title = 'Laser Treatment Resources';
			break;
		case 'lithotripsy':
			$menu = 'menu-filters-lithotripsy';
			$title = 'Lithotripsy Resources';
			break;
	}
	
	/*
	 * Add meta tags
	**/
	preprocess_view($description, $title,  'http://' . $_SERVER['SERVER_NAME'] .''.$_SERVER['REQUEST_URI']);
?>
<div class="row">
	<div id="filter-header-resize" class="span9">
		<div class="filter-header clearfix">
			<h1>Resources</h1>
			<?php if($menu): ?>
			<p id="filter-label">SHOW:</p><?php print render(module_invoke( 'menu', 'block_view', $menu) ); ?>
			<?php endif ?>
		</div>
		<div class="row">
		<?php if ($rows): ?>
			<?php print $rows; ?>
		<?php else: ?>
			<p class="span9">Sorry, we couldn't find any resources that matched your filter.</p>
			<?php endif ?>
		</div>
	</div>
</div>
<?php
	print theme('pager');
?>
