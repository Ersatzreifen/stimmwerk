<?php
class UsersPostsController extends AppController {

	var $name = 'UsersPosts';

	function index() {
		$this->UsersPost->recursive = 0;
		$this->set('usersPosts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users post', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersPost', $this->UsersPost->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersPost->create();
			if ($this->UsersPost->save($this->data)) {
				$this->Session->setFlash(__('The users post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users post could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users post', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersPost->save($this->data)) {
				$this->Session->setFlash(__('The users post has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users post could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersPost->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users post', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersPost->delete($id)) {
			$this->Session->setFlash(__('Users post deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users post was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
