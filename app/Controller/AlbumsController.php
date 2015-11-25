<?php

class AlbumsController extends AppController{

	public $uses = array('Album', 'Gallery');

	public function index(){
		$albums = $this->Album->find('all');
		$this->set(compact('albums'));
	}

	public function admin_index(){
		$albums = $this->Album->find('all');
		$this->set(compact('albums'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Album->create();
			$data = $this->request->data['Album'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Album->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Album->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Album->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Album->id = $id;
			$data1 = $this->request->data['Album'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Album->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Album->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Album->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($id){
		$album_data = $this->Album->find('all', array(
			'conditions' => array('Album.id' => $id)
			));
		$data = $this->Gallery->find('all', array(
			'conditions' => array('album_id' => $id)
			));
		$this->set(compact('data', 'album_data'));
	}

}