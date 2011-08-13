<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>S t i m m w e r k</title>
	<?php echo $this->Html->script('jquery-1.6.2.min'); ?>
	<?php echo $this->Html->script('jquery.mousewheel-3.0.4.pack'); ?>
	<?php echo $this->Html->script('jquery.fancybox-1.3.4.pack'); ?>
	<?php echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');?>
	<?php echo $this->Html->script('ckeditor/ckeditor.js');?>
	<?php echo $this->Html->css(array('master')); ?>
	<?php echo $scripts_for_layout; ?>
</head>
<body>
	<div id="container">
		<div id="<?php echo $pageclass?>" class="headimage"><?php echo $this->element('headimage'); ?></div>
		<div class="topnav">	<?php echo $this->element('topnavigation', array()); ?> </div>
		<div id="content"> <?php echo $content_for_layout; ?> </div>
		<br class="cl" />
		<div>	<?php echo $this->element('footer'); ?> </div>
	</div>
</body>
</html>
