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
	
	public function admin_category_post_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Category']['slug']=$this->Tool->slug($this->request->data['Category']['slug']);
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('Sửa danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_category_post'));
			} else {
				$this->Session->setFlash(__('Xóa danh mục thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
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
			$this->Session->setFlash(__('Xóa danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			$this->Session->setFlash($mess,'flash',array('alert'=>'info'));
		} else {
			$this->Session->setFlash(__('Xóa danh mục thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		}
		return $this->redirect(array('action' => 'admin_list_category_post'));
	}
	public function admin_list_category_post(){
		$this->Category->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Category.type' => 1),
			'limit'=>9
			
		);
		$this->set('categories',$this->Paginator->paginate());
	}
	public function admin_category_post(){

		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['slug']=$this->Tool->slug($this->request->data['Category']['slug']);
			$this->request->data['Category']['type']=1;
			date_default_timezone_set('Asia/Ha_Noi');
			$this->request->data['Category']['created']=strtotime(date('Y-m-d H:i:s'));
			if ($this->Category->save($this->request->data)) {
				$mess= array('key'=>'success','value'=>'Cập nhật thành công');
				$this->Session->setFlash(__('Lưu danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_category_post'));
			} else {
				$this->Session->setFlash(__('Lưu danh mục thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			}
		}
	}
	public function admin_list_category_product(){

		$this->Category->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Category.type' => 0),
			'limit'=>9
			
		);
		$this->set('categories',$this->Paginator->paginate());

	}
	public function admin_category_product(){

		if ($this->request->is('post')) {
			$this->Category->create();
			$this->request->data['Category']['slug']=$this->Tool->slug($this->request->data['Category']['slug']);
			$this->request->data['Category']['type']=0;
			//date_default_timezone_set('Asia/Ha_Noi');
			$this->request->data['Category']['created']=strtotime(date('Y-m-d H:i:s'));
			if ($this->Category->save($this->request->data)) {
			

				$this->Session->setFlash(__('Lưu danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_category_product'));
			} else {
				$this->Session->setFlash(__('Lưu danh mục thấy bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			}
		}
	}
	public function admin_category_product_delete($id = null) {
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('Xóa danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		} else {
			$this->Session->setFlash(__('Xóa danh mục thất bại.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
		}
		return $this->redirect(array('action' => 'admin_list_category_product'));
	}
	public function admin_category_product_edit($id = null) {
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Category']['slug']=$this->Tool->slug($this->request->data['Category']['slug']);
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('Sửa danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
				return $this->redirect(array('action' => 'admin_list_category_product'));
			} else {
				$this->Session->setFlash(__('Sửa danh mục thành công.'), 'default', array('id' => 'flashMessage', 'class' => 'alert alert-success'), 'message');
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
	}
}
