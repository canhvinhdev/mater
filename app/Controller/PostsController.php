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
	public function list_new($cate_id=null,$id=null) {
		$count=$this->bussiness();
		$this->Post->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Post.category_id' => $id,'Post.publish' => 1),
			'limit'=>$count['number_product']-1
			
		);

		$this->set('posts',$this->Paginator->paginate());
		$this->loadmodel('Category');
		$cate= $this->Category->find('first', array(
			'conditions'=>array('Category.id'=>$id),

		));
		$this->set('cate',$cate['Category']);
		 $this->set('title_for_layout', $cate['Category']['name']);

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($slug_cat= null,$slug_post= null,$id = null) {
		 $options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		 $this->set('post', $this->Post->find('first', $options));
		 $this->set('title_for_layout', $this->Post->find('first', $options)['Post']['title']);
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
				$this->Session->setFlash(__('Lưu bài viêt thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_post'));
			} else {
				$this->Session->setFlash(__('Lưu bài viêt thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			}
		}
		$categories = $this->Post->Category->find('list',array('conditions' => array('Category.type'=> 1)));
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
				$this->Session->setFlash(__('Sửa bài viêt thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_post'));
			} else {
				$this->Session->setFlash(__('Sửa bài viêt thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
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
			$this->Session->setFlash(__('Xóa bài viêt thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		} else {
			$this->Session->setFlash(__('Xóa bài viêt thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		}
		return $this->redirect(array('action' => 'admin_list_post'));
	}
	public function admin_list_post(){
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}
	
}
