<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* Newsletter Test cases generated on: 2011-08-14 20:09:29 : 1313345369*/
App::import('Model', 'Newsletter');

class NewsletterTestCase extends CakeTestCase {
	var $fixtures = array('app.newsletter', 'app.user', 'app.users_newsletter');

	function startTest() {
		$this->Newsletter =& ClassRegistry::init('Newsletter');
	}

	function endTest() {
		unset($this->Newsletter);
		ClassRegistry::flush();
	}

}
