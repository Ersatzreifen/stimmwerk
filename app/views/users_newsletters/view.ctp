<div class="usersNewsletters view">
<h2><?php  __('Users Newsletter');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersNewsletter['UsersNewsletter']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersNewsletter['UsersNewsletter']['user_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Newsletter Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersNewsletter['UsersNewsletter']['newsletter_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersNewsletter['UsersNewsletter']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $usersNewsletter['UsersNewsletter']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users Newsletter', true), array('action' => 'edit', $usersNewsletter['UsersNewsletter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Users Newsletter', true), array('action' => 'delete', $usersNewsletter['UsersNewsletter']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersNewsletter['UsersNewsletter']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Newsletters', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Newsletter', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
