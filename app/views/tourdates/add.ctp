<div class="tourdates form">
<?php echo $this->Form->create('Tourdate');?>
	<fieldset>
		<legend><?php __('Add Tourdate'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tourdates', true), array('action' => 'index'));?></li>
	</ul>
</div>