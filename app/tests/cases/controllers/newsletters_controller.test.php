<?php

Warning: date(): It is not safe to rely on the system's timezone settings. You are *required* to use the date.timezone setting or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'Europe/Berlin' for 'CEST/2.0/DST' instead in /Users/rudy/Sites/stimmwerk/cake/console/templates/default/classes/test.ctp on line 22
/* Newsletters Test cases generated on: 2011-08-07 16:32:18 : 1312727538*/
App::import('Controller', 'Newsletters');

class TestNewslettersController extends NewslettersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class NewslettersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.newsletter', 'app.user', 'app.group', 'app.media', 'app.post', 'app.users_post', 'app.comment', 'app.users_comment', 'app.users_newsletter');

	function startTest() {
		$this->Newsletters =& new TestNewslettersController();
		$this->Newsletters->constructClasses();
	}

	function endTest() {
		unset($this->Newsletters);
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
