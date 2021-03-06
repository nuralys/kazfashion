<?php

class GalleryController extends AppController{

	public $uses = array('Gallery', 'Album');

	public function admin_index(){
		$data = $this->Gallery->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Gallery->create();
			$data = $this->request->data['Gallery'];
			debug($data);
			if(!$data['img']['name']){
				unset($data['img']);
			}
			if($this->Gallery->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$albums = $this->Album->find('list');
			$this->set(compact('albums'));
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Gallery->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Gallery->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Gallery->id = $id;
			$data1 = $this->request->data['Gallery'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Gallery->save($data1)){
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
		if (!$this->Gallery->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Gallery->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$title_for_layout = 'Галерея';

		$this->set(compact('title_for_layout'));
	}
}