<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* CommentsUser Test cases generated on: 2011-08-12 15:58:15 : 1313157495*/
App::import('Model', 'CommentsUser');

class CommentsUserTestCase extends CakeTestCase {
	var $fixtures = array('app.comments_user', 'app.user', 'app.comment');

	function startTest() {
		$this->CommentsUser =& ClassRegistry::init('CommentsUser');
	}

	function endTest() {
		unset($this->CommentsUser);
		ClassRegistry::flush();
	}

}
