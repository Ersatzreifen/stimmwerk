<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* UsersComment Test cases generated on: 2011-08-11 23:38:25 : 1313098705*/
App::import('Model', 'UsersComment');

class UsersCommentTestCase extends CakeTestCase {
	var $fixtures = array('app.users_comment', 'app.user', 'app.group', 'app.media', 'app.post', 'app.users_post', 'app.comment', 'app.newsletter', 'app.users_newsletter');

	function startTest() {
		$this->UsersComment =& ClassRegistry::init('UsersComment');
	}

	function endTest() {
		unset($this->UsersComment);
		ClassRegistry::flush();
	}

}
