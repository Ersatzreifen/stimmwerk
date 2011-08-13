<?php
class UsersNewslettersController extends AppController {

	var $name = 'UsersNewsletters';

	function index() {
		$this->UsersNewsletter->recursive = 0;
		$this->set('usersNewsletters', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersNewsletter', $this->UsersNewsletter->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersNewsletter->create();
			if ($this->UsersNewsletter->save($this->data)) {
				$this->Session->setFlash(__('The users newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users newsletter could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users newsletter', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersNewsletter->save($this->data)) {
				$this->Session->setFlash(__('The users newsletter has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users newsletter could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersNewsletter->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users newsletter', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersNewsletter->delete($id)) {
			$this->Session->setFlash(__('Users newsletter deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users newsletter was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
