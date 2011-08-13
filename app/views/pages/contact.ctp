<!-- BEGIN views/pages/contact -->
<div class="contact">
	<h1><?php echo __('Contact', true)?></h1>
	<?php echo $this->Form->create('Pages', array('action' => 'contact')); ?>
	<div>
		<?php echo $this->Form->input('name', array('label' => __('Your name: *', true), 'id' => 'name required', 'div' => false, 'size' => 'string(0)')); ?>
		<?php echo $this->Session->flash('flash_email_error_name');?>
	</div>
	<div>
		<?php echo $this->Form->input('email', array('label' => __('Your e-mail address: *', true), 'id' => 'mail required', 'div' => false)); ?>
		<?php echo $this->Session->flash('flash_email_error_email');?>
	</div>
	<div>
		<?php echo $this->Form->input('message', array('label' => __('Your message: *', true), 'id' => 'message required', 'type' => 'textarea', 'div' => false));?>
		<?php echo $this->Session->flash('flash_email_error_message');?>
	</div>
	<div>
		<?php echo $this->Form->submit(__('Send', true), array('div' => false, 'class' => 'submit', 'name' => 'send_mail'));?>
	</div>
	<?php echo $this->Form->end();?>

</div>
<div style="clear:both; font-size:x-small;">
	<small>* = <?php echo __('Mandatory fields')?></small>
</div>

<?php debug($this->element('sql_dump')) ;?>
<!-- END views/pages/contact  -->