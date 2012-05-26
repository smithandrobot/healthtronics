<?php
	preprocess_view('Resources Healthtronics', 'Healthtronics Resources',  'http://' . $_SERVER['SERVER_NAME'] .''.$_SERVER['REQUEST_URI']);
?>
<div class="news-header clearfix">
	<h1>Resources</h1>
</div>
<div class="row">
	<div class="span12">
		<div class="news-molecules-container clearfix">
			<div class="row">
			<?php if ($rows): ?>
				<?php print $rows; ?>
			<?php else: ?>
				<p>Sorry, we couldn't find any resources that matched you filter.</p>
			<?php endif?>
			</div>
		</div>
	</div>
</div>
<?php
	print theme('pager');
?>