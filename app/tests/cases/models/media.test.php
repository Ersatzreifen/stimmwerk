<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* Media Test cases generated on: 2011-08-14 20:09:28 : 1313345368*/
App::import('Model', 'Media');

class MediaTestCase extends CakeTestCase {
	var $fixtures = array('app.media', 'app.user');

	function startTest() {
		$this->Media =& ClassRegistry::init('Media');
	}

	function endTest() {
		unset($this->Media);
		ClassRegistry::flush();
	}

}
