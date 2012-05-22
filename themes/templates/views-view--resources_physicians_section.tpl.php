<?php

// which section are we in
	$sectionURI = explode('/', $_SERVER['REQUEST_URI']);
	$section = $sectionURI[2];
	$replacements = array('-', '_');
	$section = strtolower(str_replace($replacements, " ", $section));
	$section = ucwords(strtolower($section));
	if($section === 'It Solutions') $section = 'IT Solution&rsquo;s';
	if($section === 'Equipment Services') $section = 'Equipment Services&rsquo;';
?>
	<div class="row">
   		<div class="news-header clearfix span9">
   			<h1><?php print  $section; ?> Resources</h1>
   		</div>
   		<div class="news-molecules-container clearfix">
   			<div>
   			<?php if ($rows)
   			{
   				print $rows;
   			}
   			?>
   			</div>
   		</div>
	</div>
<?php
	print theme('pager');
?>