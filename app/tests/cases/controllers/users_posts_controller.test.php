<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* UsersPosts Test cases generated on: 2011-08-07 16:27:43 : 1312727263*/
App::import('Controller', 'UsersPosts');

class TestUsersPostsController extends UsersPostsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersPostsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.users_post', 'app.user', 'app.group', 'app.media', 'app.post', 'app.comment', 'app.users_comment', 'app.newsletter', 'app.users_newsletter');

	function startTest() {
		$this->UsersPosts =& new TestUsersPostsController();
		$this->UsersPosts->constructClasses();
	}

	function endTest() {
		unset($this->UsersPosts);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
