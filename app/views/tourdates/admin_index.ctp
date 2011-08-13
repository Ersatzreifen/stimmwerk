<div class="tourdates index">
	<h2><?php __('Tourdates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tourdates as $tourdate):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tourdate['Tourdate']['id']; ?>&nbsp;</td>
		<td><?php echo $tourdate['Tourdate']['title']; ?>&nbsp;</td>
		<td><?php echo $tourdate['Tourdate']['description']; ?>&nbsp;</td>
		<td><?php echo $tourdate['Tourdate']['date']; ?>&nbsp;</td>
		<td><?php echo $tourdate['Tourdate']['created']; ?>&nbsp;</td>
		<td><?php echo $tourdate['Tourdate']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tourdate['Tourdate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tourdate['Tourdate']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tourdate['Tourdate']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tourdate['Tourdate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tourdate', true), array('action' => 'add')); ?></li>
	</ul>
</div>