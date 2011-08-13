<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* UsersNewsletters Test cases generated on: 2011-08-07 16:27:43 : 1312727263*/
App::import('Controller', 'UsersNewsletters');

class TestUsersNewslettersController extends UsersNewslettersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class UsersNewslettersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.users_newsletter', 'app.user', 'app.group', 'app.media', 'app.post', 'app.users_post', 'app.comment', 'app.users_comment', 'app.newsletter');

	function startTest() {
		$this->UsersNewsletters =& new TestUsersNewslettersController();
		$this->UsersNewsletters->constructClasses();
	}

	function endTest() {
		unset($this->UsersNewsletters);
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
