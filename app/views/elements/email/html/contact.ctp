<h1><?php __('Message from the dudesurf homepage'); ?></h1>
<table>
	<tr><td><?php __('Name'); ?>:</td><td><?php echo $contact['name']; ?></td></tr>
	<tr><td><?php __('Email'); ?>:</td><td><?php echo $contact['email']; ?></td></tr>
	<tr><td><?php __('Subject'); ?>:</td><td><?php echo $contact['subject']; ?></td></tr>
	<tr><td><?php __('Message'); ?>:</td><td><?php echo nl2br(h($contact['message'])); ?></td></tr>
</table>
