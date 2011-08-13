<div class="comments">
	<h2><?php __('Comments');?></h2>
	<div>
		<ul id='commentsnavbar'>
			<li><?php echo $this->Paginator->sort('text');?></li>
			<li><?php echo $this->Paginator->sort('created');?></li>
			<li><?php echo $this->Paginator->sort('Name', 'User.firstname');?></li>
		</ul>
	</div>
	<?php foreach ($comments as $comment): ?>

	<div class="commentbox">
		<h1>von: <?php echo $comment['User']['firstname']?> <?php echo $comment['User']['lastname']?></h1>

		<ul>
			<?php echo '<li>'.$comment['Comment']['text'] . '</li>'?>
			<?php
			if(array_key_exists('ChildComment', $comment) && count($comment['ChildComment'])) {
				print_children($comment['ChildComment']);
			}
			?>
		</ul>
	</div>

	<?php  endforeach;?>

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

<?php
	function print_children($comment) {
	 foreach ($comment as $comm => $content) {
		echo '<ul class="commentchild">';
		echo '<li>';
		echo $content['Comment']['text'];
		echo " ";
		echo $content['Comment']['id'];
	 	if(array_key_exists('ChildComment', $content) && count($content['ChildComment'])) {
	 			print_children($content['ChildComment']);
			}
		echo '</li>';
		echo '</ul>';
	}
}
?>
