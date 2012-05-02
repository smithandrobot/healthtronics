<p>Nav</p>
<?php print render($page['main_nav']); ?>
<?php print '<br /> This is the utility bar.<br />' . render($page['utility_bar']); ?>

<?php if ($is_front) : ?>
	<p>Front Page</p>
<?php endif; ?>

<?php
	// var_dump($page['main_nav']['system_main-menu']);
?>


<br/>
<hr/>
<br/>
<br/>

<?php
	// var_dump($page['main_nav']['system_main-menu'][399]['#theme']);
	// var_dump($page['main_nav']['system_main-menu'][399]['#title']);
	// var_dump($page['main_nav']['system_main-menu'][399]['#href']);
	// var_dump($page['main_nav']['system_main-menu'][218]);
	// var_dump($page['main_nav']['system_main-menu'][400]);
	// print $page['main_nav']['system_main-menu'][399]['#theme'];
	
?>


<br/>
<hr/>
<br/>
<br/>

<?php print '<br />This is sidebar left <br />' . render($page['sidebar_left']); ?>
<?php print '<br />This is sidebar right <br />' . render($page['sidebar_right']); ?>
    
<?php print '<br />this is content <br />' . render($page['content']) . '<br />'; ?>
<?php print '<br />this is the footer col 1<br />' .render($page['footer_col1']); ?>
<?php print '<br />this is the footer col 2<br />' .render($page['footer_col2']); ?>
<?php print '<br />this is the footer col 3<br />' .render($page['footer_col3']); ?>
<?php print '<br />this is the footer col 4<br />' .render($page['footer_col4']); ?>