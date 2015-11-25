<?php 

class ChildModelsController extends AppController{

	public $uses = array('ChildModel', 'Lookbook', 'Video');

	public function index(){
		$data = $this->ChildModel->find('all');
		$this->set(compact('data'));
	}

	public function search(){
		
		if(empty($_GET['fio']) && empty($_GET['from']) && empty($_GET['to']) && empty($_GET['id'])){
			$search_res = 'Введите пойсковый запрос...';
			return $this->set(compact('search_res'));
		}else{
			//Возраст от
			if(!empty($_GET['from'])){
				$from = (int)$_GET['from'] * 31536000;
				$from = strtotime(date('Y-m-d')) - $from - 192800;	
				$where['from'] = 'UNIX_TIMESTAMP(date_berth)<='.$from;
			}
			//Возраст до
			if(!empty($_GET['to'])){
				$to = ((int)$_GET['to']+1) * 31536000;
				$to = strtotime(date('Y-m-d')) - $to - 192800;	
				$where['to'] = 'UNIX_TIMESTAMP(date_berth)>='.$to;
			}
			if(!empty($_GET['fio'])) $where['fio'] = 'fio LIKE ' . "'%".$_GET['fio']."%'";
			if(!empty($_GET['id'])) $where['id'] = 'id='.$_GET['id'];
			
			
			if(!empty($where)){
				$where = implode($where, " AND ");
			}

			$sql = "SELECT * FROM child_models";
			if($where!=''){
				$sql .= " WHERE ".$where;
			}
			$search_res = $this->ChildModel->query($sql);
			// $search_res = $this->ChildModel->find('all', array(
			// 	'conditions' => array('fio LIKE' => '%'.$fio.'%')
			// ));
			// $this->set(compact('search_res'));
			$this->set(compact('search_res'));
		}
	}

	public function view($id){

		$data = $this->ChildModel->find('first', array(
			'conditions' => array('id' => $id)
			));
		$lookbook = $this->Lookbook->find('all', array(
			'conditions' => array('model_id' => $id)
			));
		$videos = $this->Video->find('all', array(
			'conditions' => array('model_id' => $id)
			));
		$this->set(compact('data', 'lookbook', 'videos'));
	}

	 protected function getAge($y, $m, $d) { // в качестве параметров будут год, месяц и день
	    if($m > date('m') || $m == date('m') && $d > date('d'))
	      return (date('Y') - $y - 1); // если ДР в этом году не было, то ещё -1
	    else
	      return (date('Y') - $y); // если ДР в этом году был, то отнимаем от этого года год рождения
	 }

	 public function admin_index(){
	 	$data = $this->ChildModel->find('all');
		$this->set(compact('data'));
	 }

	 public function admin_add(){
		if($this->request->is('post')){
			$this->ChildModel->create();
			$data = $this->request->data['ChildModel'];
			debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->ChildModel->save($data)){
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
		$data = $this->ChildModel->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
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
			
			$this->set(compact('id', 'data'));
		}
	}

}