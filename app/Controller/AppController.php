<?php


App::uses('Controller', 'Controller');


class AppController extends Controller {
	public $components = array('DebugKit.Toolbar', 'Session', 'Auth' => array(
            'loginRedirect' => '/admin/',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        ));
	public $helpers = array('Html', 'Form', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		// debug($this->request->params['prefix']);
		$admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
		if(!$admin) $this->Auth->allow();
		if($admin){
			$this->layout = 'default';
		}else{
			$this->layout = 'index';
		}

		$this->set(compact('admin'));

	}
}
