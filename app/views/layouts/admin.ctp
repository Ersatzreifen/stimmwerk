<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php __('Stimmwerk - Admin', true)?></title>
	<?php echo $this->Html->script('jquery-1.6.2.min'); ?>
	<?php echo $this->Html->script('jquery.mousewheel-3.0.4.pack'); ?>
	<?php echo $this->Html->script('jquery.fancybox-1.3.4.pack'); ?>
	<?php echo $this->Html->script('http://cdn.jquerytools.org/1.2.5/jquery.tools.min.js');?>
	<?php echo $this->Html->script('ckeditor/ckeditor.js');?>
	<?php echo $this->Html->css(array('cake.generic', 'admin')); ?>
	<?php echo $scripts_for_layout; ?>
</head>

<body>
	<div id="container">
		<h1>Stimmwerk Admin <span><?php if ($this->Session->check('isAuthorized')) { echo $this->Html->link('Logout', '/users/logout');	} ?></span></h1>
		<?php if ($this->Session->check('isAuthorized')) {?>
		<ul id="adminnav">
			<li><?php echo $this->Html->link(__('Products', true), array('controller' => 'products', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Categories', true), array('controller' => 'categories', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Subcategories', true), array('controller' => 'subcategories', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Colors', true), array('controller' => 'colors', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Sizes', true), array('controller' => 'sizes', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Posts', true), array('controller' => 'posts', 'action' => 'index', 'admin' => 1)); ?></li>
			<li><?php echo $this->Html->link(__('Users', true), array('controller' => 'users', 'action' => 'index', 'admin' => 1)); ?></li>
		</ul>
		<br class="cl" /><br />
		<?php } ?>

	<?php echo $this->Session->flash(); ?>
	<?php echo $content_for_layout;  ?>
	<br class="cl" />
	</div>
</body>
</html>
