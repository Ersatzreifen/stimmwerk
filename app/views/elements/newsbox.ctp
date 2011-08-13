<div id="newsbox_title"><?php echo __('Kommende Live-Events auf einem Blick:', true)?></div>
<ul id="tourdates">
	<?php foreach ($tourdates as $tourdate):?>
	<?php //debug($tourdate)?>
	<li>
	<?php echo $this->Time->format('d.m.Y H:i', $tourdate['Tourdate']['date']); ?>

	<?php echo $tourdate['Tourdate']['location']?></li>
	<?php endforeach;?>
</ul>