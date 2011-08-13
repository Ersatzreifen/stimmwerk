<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* Media Test cases generated on: 2011-08-07 16:32:06 : 1312727526*/
App::import('Controller', 'Media');

class TestMediaController extends MediaController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MediaControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.media', 'app.user', 'app.group', 'app.post', 'app.users_post', 'app.comment', 'app.users_comment', 'app.newsletter', 'app.users_newsletter');

	function startTest() {
		$this->Media =& new TestMediaController();
		$this->Media->constructClasses();
	}

	function endTest() {
		unset($this->Media);
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

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
