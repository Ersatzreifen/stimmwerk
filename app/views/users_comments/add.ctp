<div class="usersComments form">
<?php echo $this->Form->create('UsersComment');?>
	<fieldset>
		<legend><?php __('Add Users Comment'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('comment_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Comments', true), array('action' => 'index'));?></li>
	</ul>
</div>