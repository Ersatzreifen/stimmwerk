<?php
echo $this->Html->script('adminfunctions', false);
?>
<div class="posts index">
	<?php echo $this->Html->link(__('New posts', true), array('controller' => 'posts', 'action' => 'add'), array('class' => 'new')); ?>
	<h2><?php __('Posts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort(__('#', true), 'Post.id');?></th>
			<th><?php echo $this->Paginator->sort(__('Title', true), 'Post.title');?></th>
			<th><?php echo $this->Paginator->sort(__('Created', true), 'Post.created');?></th>
			<th><?php echo $this->Paginator->sort(__('Modified', true), 'Post.modified');?></th>
			<th><?php echo $this->Paginator->sort(__('User', true), 'User.name');?></th>
			<th class="c"><?php echo $this->Paginator->sort(__('active?', true), 'Post.isactive');?></th>
			<th class="c"><?php echo __('Actions', true);?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($posts as $post):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $post['Post']['id']; ?></td>
		<td>
			<?php echo $post['Post']['title']; ?><br>
			<small><?php echo $this->Text->truncate($post['Post']['text'], 100, array('ending' => '...', 'exact' => false)); ?></small>
		</td>

		<td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $post['Post']['modified']; ?></td>
		<td><?php echo $post['User']['name']; ?></td>
		<td class="c"><?php
		if ($post['Post']['isactive'] == 1) {
			echo $this->Html->link($this->Html->image('admin/icons/yes.png'), array('action' => 'toggle', $post['Post']['id']), array('class' => 'ajax', 'escape' => false));
		} else {
			echo $this->Html->link($this->Html->image('admin/icons/no.png'), array('action' => 'toggle', $post['Post']['id']), array('class' => 'ajax', 'escape' => false));
		} ?></td>
		<td class="actions">
			<?php echo $this->Html->link($this->Html->image('admin/icons/edit.png'), array('action' => 'edit', $post['Post']['id']), array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('admin/icons/picture_add.png'), array('controller' => 'images', 'action' => 'add', $post['Post']['id']), array('escape' => false)); ?>
			<?php echo $this->Html->link($this->Html->image('admin/icons/delete.png'), array('action' => 'delete', $post['Post']['id']), array('escape' => false), sprintf(__('Are you sure you want to delete %s?', true), $post['Post']['title'])); ?></td>
	</tr>
<?php endforeach; ?>
	</table>
	<?php
	echo $this->element('paginate');
	?>
</div>
