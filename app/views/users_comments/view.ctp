<div class="usersComments view">
<h2><?php  __('Users Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersComment['UsersComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersComment['UsersComment']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersComment['UsersComment']['comment_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersComment['UsersComment']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersComment['UsersComment']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Comment', true), array('action' => 'edit', $usersComment['UsersComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Users Comment', true), array('action' => 'delete', $usersComment['UsersComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersComment['UsersComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Comment', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
