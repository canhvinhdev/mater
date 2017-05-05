<?php
App::uses('AppController', 'Controller');

App::uses('CakeEmail', 'Network/Email');
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 */
class PostsController extends AppController {

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
	public function list_new($id=null) {
		$count=$this->bussiness();
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.category_id' => $id,'Post.publish' => 1),
			'limit'=>$count['number_product']-1
			
		);
		$this->set('posts',$this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_post_add() {
		if ($this->request->is('post')) {
			
			$this->Post->create();
			$user_id=$this->get_user();
		    $this->request->data['Post']['user_id']=$user_id['id'];
			//date_default_timezone_set('Asia/Ha_Noi');
			 $this->request->data['Post']['created']=strtotime(date('Y-m-d H:i:s'));
			  $this->request->data['Post']['slug']=$this->Tool->slug($this->request->data['Post']['slug']);
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'admin_list_post'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Post->Category->find('list');
		$users = $this->Post->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_post_edit($id = null) {

		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			 $this->request->data['Post']['slug']=$this->Tool->slug($this->request->data['Post']['slug']);
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'admin_list_post'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
			$categories = $this->Post->Category->find('list');
			$users = $this->Post->User->find('list');
			$this->set(compact('categories', 'users'));
		}
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_post_delete($id = null) {

		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'admin_list_post'));
	}
	public function admin_list_post(){
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}
	
}
