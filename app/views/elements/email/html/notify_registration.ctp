<h1><?php __('User registration on ')?> <?php echo $_SERVER['HTTP_HOST'];?></h1>
<?php __('Hello Dude')?>, <br><br>

<?php echo $user['gender'] == 'F' ? __('Mrs.', true) : __('Mr.')?><?php echo $user['firstname']?> <?php echo $user['lastname']?> registered on your homepage.

<dl>
  <dt><?php __('Username')?>: </dt>
  	<dd><?php echo $user['username']?></dd>
  <dt><?php __('Name')?>: </dt>
  	<dd><?php echo $user['firstname']?> <?php echo $user['lastname']?></dd>
  <dt><?php __('E-Mail')?>: </dt>
  	<dd><?php echo $user['email']?></dd>
</dl>

<br><br>
<?php $link = 'http:://' . $_SERVER['HTTP_HOST'] . '/users/block_user/confirmation_key:' . $user['confirmation_key'];?>
<?php __('Use this link if you want to')?><a href='<?php echo $link?>'> <?php __('block')?> </a><?php __('this user')?>.
<br><br>
<?php __('If you want to delete this user permanently please')?> <a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/admin/users/login"><?php __('login')?></a>
<br><br>
<?php __('This is an automatic genereatic email... Please do not reply.')?>
