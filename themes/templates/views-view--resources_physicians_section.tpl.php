<?php ?>
<div class="news-header clearfix">
	<h1>Resources</h1>
</div>
<div class="row">
	<div class="span12">
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
</div>
<?php
	print theme('pager');
?>