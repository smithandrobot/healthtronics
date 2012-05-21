<?php
print render(module_invoke( 'menu', 'block_view', 'menu-physicians-menu') );
?>
<div class="news-header clearfix">
	<h1>Resources</h1>
</div>
<div class="row">
	<div class="span12">
		<div class="news-molecules-container clearfix">
			<div class="row">
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