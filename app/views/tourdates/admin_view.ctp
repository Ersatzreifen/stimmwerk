<div class="tourdates view">
<h2><?php  __('Tourdate');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tourdate['Tourdate']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tourdate', true), array('action' => 'edit', $tourdate['Tourdate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tourdate', true), array('action' => 'delete', $tourdate['Tourdate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tourdate['Tourdate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tourdates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tourdate', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
