<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array('Page', 'News');

	public function home(){
		$news = $this->News->find('all', array(
			'limit' => 3,
			'order' => array('date' => 'desc')
		));

		$this->view = 'home';
		$this->set(compact('news'));
	}

	public function admin_index(){
		
	}
}
