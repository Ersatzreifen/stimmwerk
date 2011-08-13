<?php
class MediaController extends AppController {

	var $name = 'Media';

	function index() {
		$this->Media->recursive = 0;
		$this->set('media', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid media', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('media', $this->Media->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Media->create();
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The media has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid media', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The media has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Media->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for media', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Media->delete($id)) {
			$this->Session->setFlash(__('Media deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Media was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Media->recursive = 0;
		$this->set('media', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid media', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('media', $this->Media->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Media->create();
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The media has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid media', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Media->save($this->data)) {
				$this->Session->setFlash(__('The media has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The media could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Media->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for media', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Media->delete($id)) {
			$this->Session->setFlash(__('Media deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Media was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
