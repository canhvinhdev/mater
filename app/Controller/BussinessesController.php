<?php
App::uses('AppController', 'Controller');
/**
 * Bussinesses Controller
 *
 * @property Bussiness $Bussiness
 * @property PaginatorComponent $Paginator
 */
class BussinessesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Bussiness->recursive = 0;
		$this->set('bussinesses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bussiness->exists($id)) {
			throw new NotFoundException(__('Invalid bussiness'));
		}
		$options = array('conditions' => array('Bussiness.' . $this->Bussiness->primaryKey => $id));
		$this->set('bussiness', $this->Bussiness->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bussiness->create();
			if ($this->Bussiness->save($this->request->data)) {
				$this->Session->setFlash(__('The bussiness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bussiness could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Bussiness->exists($id)) {
			throw new NotFoundException(__('Invalid bussiness'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bussiness->save($this->request->data)) {
				$this->Session->setFlash(__('The bussiness has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bussiness could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bussiness.' . $this->Bussiness->primaryKey => $id));
			$this->request->data = $this->Bussiness->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Bussiness->id = $id;
		if (!$this->Bussiness->exists()) {
			throw new NotFoundException(__('Invalid bussiness'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bussiness->delete()) {
			$this->Session->setFlash(__('The bussiness has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bussiness could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	public function admin_home($id=null) {
		if ($this->request->is(array('post', 'put'))) {
			//pr($this->request->data);die();
			$this->Bussiness->create();
			$this->Bussiness->id =1;
			$this->Bussiness->save($this->request->data);


			$count=0;
			$this->loadModel('Slide');
			foreach($this->request->data['Slide'] as $item){
				$count++;
				$this->Slide->create();
				$this->Slide->id = $count;
				$this->request->data['Slide']['thumbnail']=$item['thumbnail'];
				$this->request->data['Slide']['name']=$item['name'];
				$this->Slide->save($this->request->data);
			}

			// supporter
			$count=0;
			$this->loadModel('Supporter');
			foreach($this->request->data['Supporter'] as $item){
				$count++;
				$this->Supporter->create();
				$this->Supporter->id = $count;
				$this->request->data['Supporter']['status']=$item['publish'];
				$this->request->data['Supporter']['name']=$item['name'];
				$this->request->data['Supporter']['email']=$item['email'];
				$this->request->data['Supporter']['hotline']=$item['hotline'];
				$this->request->data['Supporter']['address']=$item['address'];
				$this->Supporter->save($this->request->data);
			}
			return $this->redirect(array('controller'=>'products','action' => 'admin_index'));

					
		}
		else{
			 $Bussiness = $this->Bussiness->find('all');
			 $this->set('bussiness',$Bussiness[0]);


			 $this->loadModel('Slide');
			 $slide = $this->Slide->find('all');
			 $this->set('slide',$slide);
			 //supporter
			 $this->loadModel('Supporter');
			 $Supporter = $this->Supporter->find('all');
			// pr($Supporter);
			 $this->set('Supporter',$Supporter);
			 $options = array('6'=>'6','9'=>'9','12'=>'12','15'=>'15','18'=>'18');
			 $this->set('options',$options);
			 
		}
		
		
	}
	public function admin_introduce() {
		$this->loadModel('Introduce');
		if ($this->request->is(array('post', 'put'))) {
			$this->Introduce->create();
			$this->request->data['Introduce']['content']=$this->request->data['Bussiness']['content'];
			$this->Introduce->id =1;
			$this->Introduce->save($this->request->data);
			return $this->redirect(array('controller'=>'products','action' => 'admin_index'));
		}
		else{
			 $Introduce = $this->Introduce->find('all');	
			 $this->set('Introduce',$Introduce[0]);
		}

	}
	public function admin_product() {

		if ($this->request->is(array('post', 'put'))) {
			$this->Bussiness->create();
			$this->Bussiness->id =1;
			$this->Bussiness->save($this->request->data);
			return $this->redirect(array('controller'=>'products','action' => 'admin_index'));
		}
		else{
			$options = array('6'=>'6','9'=>'9','12'=>'12','15'=>'15','18'=>'18');
			 $this->set('options',$options);
			 $Bussiness = $this->Bussiness->find('all');
			 $this->set('bussiness',$Bussiness[0]);
		}
	}
	public function admin_contact() {
		if ($this->request->is(array('post', 'put'))) {
			$this->Bussiness->create();
			$this->Bussiness->id =1;
			$this->Bussiness->save($this->request->data);
			return $this->redirect(array('controller'=>'products','action' => 'admin_index'));
		}
		else{
			 $Bussiness = $this->Bussiness->find('all');
			 $this->set('bussiness',$Bussiness[0]);
		}
	}
	// public function admin_detail_product($id = 1) {
	// }
}
