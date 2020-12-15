		</div>
	</div>

	<div id="footer">
		<div class="jumbotron push-spaces">
			ระบบบริหารจัดการร้านค้าปลีกนี้ พัฒนาต่อยอดมาจาก ระบบ Open SourcePOS<br>
			<strong><?php echo $this->lang->line('common_copryrights', date('Y')); ?> · 
			<a href="https://opensourcepos.org" target="_blank"><?php echo $this->lang->line('common_website'); ?></a>  · 
  			<?php echo $this->config->item('application_version'); ?> - <?php echo substr($this->config->item('commit_sha1'), 0, 6); ?></strong>.
		</div>
	</div>
</body>
</html>
