	<ul class="navbar">
		<li class="welcome">
			<?php echo $this->Html->link(__('Welcome', true), array('controller' => '/')); ?> </li>
		<li class="media">
			<div>
				<span><?php echo $this->Html->link(__('Media', true), array('controller' => 'media', 'action' => 'media')); ?></span>
				<ul>
					<li><?php echo $this->Html->link(__('Audio', true), array('controller' => 'media', 'action' => 'audio')); ?></li>
					<li><?php echo $this->Html->link(__('Video', true), array('controller' => 'media', 'action' => 'video')); ?></li>
					<li><?php echo $this->Html->link(__('photo', true), array('controller' => 'media', 'action' => 'photo')); ?></li>
				</ul>
			</div>
		</li>
		<li class="musicians">
			<div>
				<span><?php echo $this->Html->link(__('Musicians', true), array('controller' => 'musicians')); ?></span>
				<ul>
					<li><?php echo $this->Html->link(__('Beate', true), array('controller' => 'musicians', 'action' => 'view', 'beate')); ?></li>
					<li><?php echo $this->Html->link(__('Christoph', true), array('controller' => 'musicians', 'action' => 'view', 'christoph')); ?></li>
					<li><?php echo $this->Html->link(__('David', true), array('controller' => 'musicians', 'action' => 'view', 'david')); ?></li>
					<li><?php echo $this->Html->link(__('Rudy', true), array('controller' => 'musicians', 'action' => 'view', 'rudy')); ?></li>
				</ul>
			</div>
		</li>
		<li class="news-and-tourdates">
			<div>
				<span><?php echo $this->Html->link(__('News / Tourdates', true), array('controller' => 'tourdates', 'action' => 'view')); ?></span>
				<ul>
					<li><?php echo $this->Html->link(__('News', true), array('controller' => 'posts', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Tourdates', true), array('controller' => 'tourdates', 'action' => 'index')); ?></li>
				</ul>
			</div>
		</li>
		<li class="guestbook"><?php echo $this->Html->link(__('Guestbook', true), array('controller' => 'comments', 'action' => 'index')); ?></li>
		<li class="faq"><?php echo $this->Html->link(__('FAQ', true), array('controller' => 'pages', 'action' => 'display', 'faq')); ?></li>
		<li class="contact"><?php echo $this->Html->link(__('Contact', true), array('controller' => 'pages', 'action' => 'contact')); ?></li>
		<?php if ($this->Session->check('isAuthorized')):?>
		<li class="logout">
			<?php echo $this->Html->link(__('Logout', true), '/users/logout'); ?>
		</li>
		<?php else: ?>
		<li class="login">
			<?php echo $this->Html->link(__('Login', true), '/users/login'); ?>
		</li>
		<?php endif;?>
	</ul>
	<br class="cl" />
