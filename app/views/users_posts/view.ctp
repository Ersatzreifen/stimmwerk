<div class="usersPosts view">
<h2><?php  __('Users Post');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersPost['UsersPost']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersPost['UsersPost']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Post Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersPost['UsersPost']['post_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersPost['UsersPost']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersPost['UsersPost']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Post', true), array('action' => 'edit', $usersPost['UsersPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Users Post', true), array('action' => 'delete', $usersPost['UsersPost']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersPost['UsersPost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Posts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Post', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
