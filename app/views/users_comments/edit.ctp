<div class="usersComments form">
<?php echo $this->Form->create('UsersComment');?>
	<fieldset>
		<legend><?php __('Edit Users Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('comment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('UsersComment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('UsersComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Comments', true), array('action' => 'index'));?></li>
	</ul>
</div>