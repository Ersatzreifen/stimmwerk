<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $components = array('Email');
	var $helpers = array('Ajax', 'Time');
	var $uses = array('Tourdate');


	function display() {
		$this->set('tourdates', $this->Tourdate->find('all'));
	}

	function admin_index() {

	}

	function contact() {
	if(!empty($this->data)) {

			$email_error = null;

			if(empty($this->data['Pages']['name']) || $this->data['Pages']['name'] == '') {
				$email_error = true;
				$this->Session->setFlash(__('Please enter your name', true), 'flash_error', array('class' => 'error'), 'flash_email_error_name');
			}

			if(empty($this->data['Pages']['email']) || $this->data['Pages']['email'] == '') {
				$email_error = true;
				$this->Session->setFlash(__('Please enter your e-mail address', true), 'flash_error', array('class' => 'error'), 'flash_email_error_email');
			}
			elseif(!filter_var($this->data['Pages']['email'], FILTER_VALIDATE_EMAIL) ) {
				$email_error = true;
				$this->Session->setFlash(__('Please enter a valid e-mail address', true), 'flash_error', array('class' => 'error'), 'flash_email_error_email');
			}

			if(empty($this->data['Pages']['message']) || $this->data['Pages']['message'] == '') {
				$email_error = true;
				$this->Session->setFlash(__('Please enter your message', true), 'flash_error', array('class' => 'error'), 'flash_email_error_message');
			}

			if(!$email_error) {
				if($this->mail()) {
					$this->Session->setFlash(__('E-Mail was sent successfully', true), 'flash_email', array('class' => 'notice'), 'flash_email_notice');
					$this->redirect('/contact-us/thanks', true, false);
				}
				else {
					$this->Session->setFlash(__('Coudn\'t send e-mail', true), 'flash_error', array('class' => 'error'), 'flash_email_error');
				}
			}
		}

	}

	function faq() {

	}

	function thanks() {

	}

	private function mail () {

		if($_SERVER['SERVER_NAME'] == 'stimmwerk.dev') {
			$recipient = 'ersatzreifen@macbay.de';
		} else {
			$recipient = '';
		}

    $this->Email->from = $this->data['Pages']['email'];
    $this->Email->to = $recipient;
    $this->Email->subject = 'Testnachricht';
    $this->Email->template = 'contact';
    $this->Email->sendAs = 'both';

    $contact['name'] = $this->data['Pages']['name'];
    $contact['message'] = $this->data['Pages']['message'];
    $contact['email'] = $this->data['Pages']['email'];
    $contact['subject'] = 'Message from the dudesurf homepage';
    $this->set('contact', $contact);
    if($this->Email->send()) {
    	return true;
    }
	}
}

?>