<?php

// which section are we in
	$sectionURI = explode('/', $_SERVER['REQUEST_URI']);
	$section = $sectionURI[2];
	$replacements = array('-', '_');
	$section = strtolower(str_replace($replacements, " ", $section));
	$section = ucwords(strtolower($section));
	if($section === 'It Solutions') $section = 'IT Solution&rsquo;s';
	if($section === 'Equipment Services') $section = 'Equipment Services&rsquo;';
	
	switch($sectionURI[2])
	{
		case 'cryotherapy':
			$menu = 'menu-filters-cryotherapy';
			break;
		case 'equipment-services':
			$menu = 'menu-filters-equipment-services';
			break;
		case 'it-solutions':
			$menu = 'menu-filters-it-solutions';
			break;
		case 'lab-solutions':
			$menu = 'menu-filters-lab-solutions';
			break;
		case 'laser-treatments':
			$menu = 'menu-filters-lab-solutions';
			break;
		case 'lithotripsy':
			$menu = 'menu-filters-lithotripsy';
			break;
	}

?>

<div id="filter-header-resize" class="span9">
	<div class="filter-header clearfix">
		<h1><?php print  $section; ?> Resources</h1>
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