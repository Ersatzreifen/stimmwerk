<?php
class TourdatesController extends AppController {

	var $name = 'Tourdates';

	function index() {
		$this->Tourdate->recursive = 0;
		$this->set('tourdates', $this->Tourdate->find('all'));

	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tourdate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tourdate', $this->Tourdate->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tourdate->create();
			if ($this->Tourdate->save($this->data)) {
				$this->Session->setFlash(__('The tourdate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourdate could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tourdate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tourdate->save($this->data)) {
				$this->Session->setFlash(__('The tourdate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourdate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tourdate->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tourdate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tourdate->delete($id)) {
			$this->Session->setFlash(__('Tourdate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tourdate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Tourdate->recursive = 0;
		$this->set('tourdates', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tourdate', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tourdate', $this->Tourdate->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Tourdate->create();
			if ($this->Tourdate->save($this->data)) {
				$this->Session->setFlash(__('The tourdate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourdate could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tourdate', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tourdate->save($this->data)) {
				$this->Session->setFlash(__('The tourdate has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tourdate could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tourdate->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tourdate', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tourdate->delete($id)) {
			$this->Session->setFlash(__('Tourdate deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tourdate was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
