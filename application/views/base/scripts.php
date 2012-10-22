<script src="<?php echo base_url("assets/dist/js/scripts.min.js") ?>" type="text/javascript" async></script>
<?php if (isset($js)) : ?>
	<?php foreach ($js as $file) : ?>
		<script src="<?php echo base_url("assets/src/js/" . $file . ".js") ?>" type="text/javascript" async></script>
	<?php endforeach ?>
<?php endif ?>
<script async>
	var pageTracker = _gat._getTracker('<?php echo $this->google_analytics ?>');
	pageTracker._trackPageview();
</script>