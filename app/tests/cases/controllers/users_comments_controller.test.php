<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* UsersComments Test cases generated on: 2011-08-07 16:27:43 : 1312727263*/
App::import('Controller', 'UsersComments');

class TestUsersCommentsController extends UsersCommentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersCommentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.users_comment', 'app.user', 'app.group', 'app.media', 'app.post', 'app.users_post', 'app.comment', 'app.newsletter', 'app.users_newsletter');

	function startTest() {
		$this->UsersComments =& new TestUsersCommentsController();
		$this->UsersComments->constructClasses();
	}

	function endTest() {
		unset($this->UsersComments);
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
