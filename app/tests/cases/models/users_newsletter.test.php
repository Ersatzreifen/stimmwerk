<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* UsersNewsletter Test cases generated on: 2011-08-14 20:09:30 : 1313345370*/
App::import('Model', 'UsersNewsletter');

class UsersNewsletterTestCase extends CakeTestCase {
	var $fixtures = array('app.users_newsletter', 'app.user', 'app.group', 'app.media', 'app.comment', 'app.post', 'app.newsletter');

	function startTest() {
		$this->UsersNewsletter =& ClassRegistry::init('UsersNewsletter');
	}

	function endTest() {
		unset($this->UsersNewsletter);
		ClassRegistry::flush();
	}

}
