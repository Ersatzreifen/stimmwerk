<div class="usersNewsletters form">
<?php echo $this->Form->create('UsersNewsletter');?>
	<fieldset>
		<legend><?php __('Add Users Newsletter'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('newsletter_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users Newsletters', true), array('action' => 'index'));?></li>
	</ul>
</div>