<?php //debug($tourdates);?>
<div>
	<iframe width="100%" height="900" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
					src="http://maps.googleapis.com/maps/api/staticmap?center=53.501634,9.992001&zoom=10&size=900x900&
					<?php foreach ($tourdates as $tourdate) {
						echo "markers=size:big%7Ccolor:blue%7Clabel:S%7C%7C". $tourdate['Tourdate']['geocode']."&";
					} ?>
					sensor=false"></iframe><br />
</div>
