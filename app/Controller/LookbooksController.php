<?php

class LookbooksController extends AppController{

	public $uses = array('Lookbook', 'ChildModel');

	public function admin_index(){
		$data = $this->ChildModel->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Lookbook->create();
			$data = $this->request->data['Lookbook'];
			
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			$array = array('model_id' => $this->request->data['Lookbook']['model_id']);
			$data = array_merge($data,$array);
			// debug($data);
			// return $this->redirect($this->referer());
			if($this->Lookbook->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}

	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->ChildModel->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}

		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}

		$model_id = $this->ChildModel->findById($id);
		$model_id = $model_id['ChildModel']['id'];
		$data = $this->Lookbook->find('all', array(
			'conditions' => array('model_id' => $model_id)
		));

		if($this->request->is(array('post', 'put'))){
			$this->ChildModel->id = $id;
			$data1 = $this->request->data['ChildModel'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->ChildModel->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data', 'model_id'));
		}
	}

	public function admin_delete($id){
		if (!$this->Lookbook->exists($id)) {
			throw new NotFounddException('Такой фотографии нет');
		}
		if($this->Lookbook->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

}