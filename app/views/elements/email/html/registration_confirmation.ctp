<h1><?php __('Please confirm your registration on ')?> <?php echo $_SERVER['HTTP_HOST'];?></h1>

<?php __('You recently registered on ')?> <?php echo $_SERVER['HTTP_HOST'];?> <?php __('with these informations:')?>
<dl>
  <dt><?php __('Username')?>: </dt>
  	<dd><?php echo $user['username']?></dd>
  <dt><?php __('Name')?>: </dt>
  	<dd><?php echo $user['firstname']?> <?php echo $user['lastname']?></dd>
  <dt><?php __('E-Mail')?>: </dt>
  	<dd><?php echo $user['email']?></dd>
</dl>
<?php $link = 'http:://' . $_SERVER['HTTP_HOST'] . '/users/confirm_registration/confirmation_key:' . $user['confirmation_key'];?>
<a href='<?php echo $link?>'><?php __('Klick to confirm registration')?></a>
