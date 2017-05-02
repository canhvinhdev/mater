<?php
App::uses('AppController', 'Controller');
/**
 * Products Controller
 *
 * @property Product $Product
 * @property PaginatorComponent $Paginator
 */
class ProductsController extends AppController {

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
	public function admin_list_product() {
		$this->Product->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Product.publish' => 1)
		);
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		$this->set('product', $this->Product->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			pr($this->request->data);die();
			
			$this->Product->create();
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		}
		$categories = $this->Product->Category->find('list',array(
				'conditions' => array('Category.publish'=> 1,'Category.type'=>0)
			));
		$users = $this->Product->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Product->save($this->request->data)) {
				$this->Session->setFlash(__('The product has been saved.'));
				return $this->redirect(array('action' => 'admin_list_product'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
			$this->request->data = $this->Product->find('first', $options);
		}
		$categories = $this->Product->Category->find('list');
		$users = $this->Product->User->find('list');
		$this->set(compact('categories', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Product->id = $id;
		if (!$this->Product->exists()) {
			throw new NotFoundException(__('Invalid product'));
		}
		if ($this->Product->delete()) {
			$this->Session->setFlash(__('The product has been deleted.'));
		} else {
			$this->Session->setFlash(__('The product could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'admin_list_product'));
	}
	public function list_product($id=null){

		$this->Product->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Product.publish' => 1,'Product.category_id'=>$id),
			'limit'=>6
			
		);
		$this->set('products', $this->Paginator->paginate());
	}
	public function home() {
		$product_new = $this->Product->find('all',
                array(
                    'recursive' => -1,
                    'limit' => 9,
                    'fields' => array('name', 'price', 'thumbnail','id','category_id', 'slug', 'discount','publish'),
                    'contain' => array(
                        'Category' => array(
                            'fields' => array('id', 'name', 'slug')
                        )
                    ),
                    'order' => array('Product.created' => 'desc'),
                    'conditions' => array('Product.publish' => 1)
                )
            );
        $this->set(compact('product_new'));
        //var_dump($product_new);
		
	}
	public function admin_index(){
		$product = $this->Product->find('count', array(
        'conditions' => array('Product.publish' => 1)));

        $this->loadModel('Post');
        $post= $this->Post->find('count', array(
        'conditions' => array('Post.publish' => 1)));

         $this->loadModel('Contact');
        $contact= $this->Contact->find('count', array(
        'conditions' => array('Contact.publish' => 1)));

        $this->loadModel('Category');
        $cate_new= $this->Category->find('count', array(
        'conditions' => array('Category.publish' => 1,'type'=>1)));

        $cate_pro= $this->Category->find('count', array(
        'conditions' => array('Category.publish' => 1,'type'=>0)));

        $total['Product']=$product;
        $total['Post']=$post;
        $total['Contact']=$contact;
        $total['Category_new']=$cate_new;
        $total['Category_pro']=$cate_pro;
        $this->set(compact('total'));

	}
}
