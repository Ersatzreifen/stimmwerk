<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

class AppController extends Controller {
	var $components = array('Acl', 'Auth', 'Session');
	var $helpers = array('Html', 'Form', 'Session');

	var $referer = null;
	var	$site_id = '/';
	var	$site = null;
	var	$redirect = null;
	var $pageclass = 'main';

	function beforeFilter() {
		parent::beforeFilter();
		//Configure AuthComponent
		$redirect_logout = '/';
		$this->Auth->authorize = 'actions';

		if(isset($this->params['admin']) && $this->params['admin'] == 1) {
			$this->layout = 'admin';
			$this->Auth->loginAction = '/admin/users/login';
			$redirect_logout = '/admin/users/login';
		} else {
			$this->Auth->allow('*');
			$this->Auth->loginAction = '/users/login';
		}
		$this->Auth->logoutRedirect = $redirect_logout;
		$this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
		$this->Auth->autoRedirect = false;
		//$this->Auth->authorize = 'controllers';
		$this->Auth->actionPath = 'controllers/';
		$this->Auth->authError = '';
		$this->Auth->allowedActions = array('display');
		//$this->Auth->allowedActions = array('display');
		//$this->Auth->userScope = array('User.status' => 1);

		// eine kleine Hilfsfunktion um zu navigieren
		$this->get_referer();
		$this->set('pageclass', $this->pageclass);

		$user = $this->Auth->user();
		$group =& $this->User->Group;
		$group->id = $user['User']['group_id'];
		if (count($user)) {
			$this->Session->write('isAuthorized', '1'); // <= kann eigentlich weg, oder?
			// Für Abfragen, ob User eine Seite besuchen "dürfte"
			$this->Session->write('AllowedActions.Posts.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Posts/add', 'read'));
			$this->Session->write('AllowedActions.Posts.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Posts/edit', 'read'));
			$this->Session->write('AllowedActions.Posts.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Posts/delete', 'read'));
			$this->Session->write('AllowedActions.Comments.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Comments/add', 'read'));
			$this->Session->write('AllowedActions.Comments.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' =>$user['User']['group_id']), 'Comments/edit', 'read'));
			$this->Session->write('AllowedActions.Comments.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Comments/delete', 'read'));
			$this->Session->write('AllowedActions.Newsletters.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Newsletters/add', 'read'));
			$this->Session->write('AllowedActions.Newsletters.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' =>$user['User']['group_id']), 'Newsletters/edit', 'read'));
			$this->Session->write('AllowedActions.Newsletters.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Newsletters/delete', 'read'));
			$this->Session->write('AllowedActions.Media.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Media/add', 'read'));
			$this->Session->write('AllowedActions.Media.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' =>$user['User']['group_id']), 'Media/edit', 'read'));
			$this->Session->write('AllowedActions.Media.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Media/delete', 'read'));
			$this->Session->write('AllowedActions.Tourdates.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Tourdates/add', 'read'));
			$this->Session->write('AllowedActions.Tourdates.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' =>$user['User']['group_id']), 'Tourdates/edit', 'read'));
			$this->Session->write('AllowedActions.Tourdates.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Tourdates/delete', 'read'));
			$this->Session->write('AllowedActions.Users.Add', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Users/add', 'read'));
			$this->Session->write('AllowedActions.Users.Edit', $this->Acl->check(array('model' => 'Group', 'foreign_key' =>$user['User']['group_id']), 'Users/edit', 'read'));
			$this->Session->write('AllowedActions.Users.Delete', $this->Acl->check(array('model' => 'Group', 'foreign_key' => $user['User']['group_id']), 'Users/delete', 'read'));
		}
		else {
			$this->Session->delete('isAuthorized');
			$this->Session->delete('Auth.User');
			$this->Session->delete('AllowedActions');
		}

		$this->Authed->userScopeRules = array(
			'status' => array(
				'expected' => 0,
		 		'message' => __("You are banned from this service. Sorry.", true)
		 	),
			'status' => array(
				'expected' => 4,
				'message' => __("Your account is not active yet. Click the Link in our Mail.", true)
			)
		);
	}

	private function get_referer(){
		$referer =& $this->referer() || $this->here;
		$site_id = '/';
		$site = $this->site;
		$redirect = $this->redirect;

		if(isset($this->params['named']['referer'])) {
			$referer = $this->params['named']['referer'];
		}	elseif(isset($this->data['User']['referer'])) {
			$referer = $this->data['User']['referer'];
		}	else {
			$referer = $this->referer();
		}

		$referer_array = explode('/', $referer);

		if(empty($referer_array[0]) || $referer_array[0] == '') {
			array_shift($referer_array);
		}

		foreach ($referer_array as &$action) {
			if (!$site) {
				$site = '/'.$action;
				continue;
			}
			$site_id .= $action.'/';
		}

		if ($site || $site_id) {
			$redirect = true;
			$this->site = $site;
			$this->site_id = $site_id;
			$this->referer = $referer;
			$this->redirect = $redirect;
		}
	}
}
