<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

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
		$this->Category->recursive = 0;
		$this->set('categories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Category->create();
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
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
	public function admin_category_post_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'admin_list_category_post'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_category_post_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->Category->delete()) {
			$mess= array('key'=>'success','value'=>'Xóa thành công');
			$this->Session->setFlash($mess,'flash',array('alert'=>'info'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'admin_list_category_post'));
	}
	public function admin_list_category_post(){
		$this->Category->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Category.type' => 1,'Category.publish' => 1),
			'limit'=>9
			
		);
		$this->set('categories',$this->Paginator->paginate());
	}
	public function admin_category_post(){

		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['type']=1;
			date_default_timezone_set('Asia/Ha_Noi');
			$this->request->data['Category']['created']=strtotime(date('Y-m-d H:i:s'));
			if ($this->Category->save($this->request->data)) {
				$mess= array('key'=>'success','value'=>'Cập nhật thành công');
				$this->Session->setFlash($mess,'flash',array('alert'=>'info'));
				return $this->redirect(array('action' => 'admin_list_category_post'));
			} else {
				$mess= array('key'=>'error','value'=>'Cập nhật thất bại');
				$this->Session->setFlash(__('The category has been saved.'));
			}
		}
	}
	public function admin_list_category_product(){
		$this->Category->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Category.type' => 0,'Category.publish' => 1),
			'limit'=>9
			
		);
		$this->set('categories',$this->Paginator->paginate());
	}
	public function admin_category_product(){

		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['type']=0;
			date_default_timezone_set('Asia/Ha_Noi');
			$this->request->data['Category']['created']=strtotime(date('Y-m-d H:i:s'));
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'admin_list_category_post'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
	}
	public function admin_category_product_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'admin_list_category_product'));
	}
	public function admin_category_product_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'admin_list_category_product'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
	}
}
