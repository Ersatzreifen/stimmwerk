<div class="usersPosts form">
<?php echo $this->Form->create('UsersPost');?>
	<fieldset>
		<legend><?php __('Add Users Post'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('post_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Posts', true), array('action' => 'index'));?></li>
	</ul>
</div>