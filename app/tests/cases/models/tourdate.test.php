<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* Tourdate Test cases generated on: 2011-08-12 16:28:52 : 1313159332*/
App::import('Model', 'Tourdate');

class TourdateTestCase extends CakeTestCase {
	var $fixtures = array('app.tourdate');

	function startTest() {
		$this->Tourdate =& ClassRegistry::init('Tourdate');
	}

	function endTest() {
		unset($this->Tourdate);
		ClassRegistry::flush();
	}

}
