<?php
class UsersCommentsController extends AppController {

	var $name = 'UsersComments';

	function index() {
		$this->UsersComment->recursive = 0;
		$this->set('usersComments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersComment', $this->UsersComment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersComment->create();
			if ($this->UsersComment->save($this->data)) {
				$this->Session->setFlash(__('The users comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users comment could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersComment->save($this->data)) {
				$this->Session->setFlash(__('The users comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersComment->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersComment->delete($id)) {
			$this->Session->setFlash(__('Users comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
