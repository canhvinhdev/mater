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
		// $this->Paginator->settings = array(
		// 	'conditions' => array('Product.publish' => 1)
		// );
		$this->set('products', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($slug_cat= null,$slug_post= null,$id = null) {
		//pr($id);die();
		if (!$this->Product->exists($id)) {
			throw new NotFoundException(__('Invalid product'));
		}
		$options = array('conditions' => array('Product.' . $this->Product->primaryKey => $id));
		//pr($this->Product->find('first', $options));
		$this->set('product', $this->Product->find('first', $options));
		$truck = $this->Product->find('all',
                array(
                    'conditions' => array('Product.publish' => 1),
                    'limit' => 4,
                    'order' => array('Product.created' => 'desc')
                ) );
		$this->set('truck',$truck);
		//$this->loadModel('Technique');

	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			//pr($this->request->data);die();

			$this->Product->create();
			$this->request->data['Product']['user_id']=$this->get_user()['User']['id'];
			$this->request->data['Product']['slug']=$this->Tool->slug($this->request->data['Product']['slug']);
			$this->Product->save($this->request->data);
			
			$Product=$this->Product->find('all',array(
				'limit'=>1,
				'order'=>array('Product.id'=>'DESC'),
				'fields'=>array('id')
			));
			$Product=$Product[0]['Product']['id'];

			$techniques=$this->request->data['techniques'];
			$techniques=json_decode($techniques, true);
			foreach ($techniques as $item) {
				$this->loadModel('Technique');
				$this->Technique->create();
				$this->request->data['Technique']['id']=$item['id'];
				$this->request->data['Technique']['name']=$item['name'];
				$this->request->data['Technique']['value']=$item['innercode'];
				$this->request->data['Technique']['product_id']=$Product;
				$this->request->data['Technique']['pater']=$item['pid'];
				$this->Technique->save($this->request->data);
			}
			
			$image=$this->request->data['Product'];
			$this->image($Product,$image);

			return $this->redirect(array('action' => 'admin_list_product'));
			
		}else{
			$this->loadModel('Technique');
			$technique=$this->Technique->find('all',array(
				'limit'=>1,
				'order'=>array('Technique.id'=>'DESC'),
				'fields'=>array('id')
			));

			if(isset($technique[0]['Technique']['id'])){
				$this->set('technique',$technique[0]['Technique']['id']);
			}
			
			$categories = $this->Product->Category->find('list',array(
					'conditions' => array('Category.publish'=> 1,'Category.type'=>0)
				));
			$users = $this->Product->User->find('list');
			$this->set(compact('categories', 'users'));


		}
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function image($product_id,$image){
		$this->loadModel('Picture');
			if(isset($image['title']) && !empty($image['title'][0])){
				for($i =0;$i<count($image['title']);$i++){
					 $date=getdate();
					 $this->request->data['Picture']['link']=$date[0];
					 $this->request->data['Picture']['image']=$image['image'][$i];
					 //pr($this->request->data);
					 $result = $this->UploadFile('furniture', 'Picture', 'image');
			         if($result['status'] == 1)
			         {
			          $filename = '/uploads/furniture/' .$result['filename'];
			          $this->Picture->create();
			          $this->request->data['Picture']['image'] = $filename;	
			          $this->request->data['Picture']['title'] = $image['title'][$i];	
			          $this->request->data['Picture']['type']=0;
			          $this->request->data['Picture']['product_id']=$product_id;
			          $this->Picture->save($this->request->data);

			         }
			         else
			         {
			          $this->Session->setFlash('Không Upload được hình ảnh. Vui lòng thử lại.');
			         }
				}
			}
			if(isset($image['title1']) && !empty($image['title1'][0])){
				for($i =0;$i<count($image['title1']);$i++){
					 $date=getdate();
					 $this->request->data['Picture']['link']=$date[0];
					 $this->request->data['Picture']['image']=$image['image1'][$i];
					 //pr($this->request->data);
					 $result = $this->UploadFile('furniture', 'Picture', 'image');
			         if($result['status'] == 1)
			         {
			          $filename = '/uploads/furniture/' .$result['filename'];
			          $this->Picture->create();
			          $this->request->data['Picture']['image'] = $filename;	
			          $this->request->data['Picture']['title'] = $image['title1'][$i];	
			          $this->request->data['Picture']['type']=1;
			          $this->request->data['Picture']['product_id']=$product_id;
			          $this->Picture->save($this->request->data);

			         }
			         else
			         {
			          $this->Session->setFlash('Không Upload được hình ảnh. Vui lòng thử lại.');
			         }
				}
			}
	}

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

			$this->loadModel('Technique');
			$technique=$this->Technique->find('all',array(
				'limit'=>1,
				'order'=>array('Technique.id'=>'DESC'),
				'fields'=>array('id')
			));
			$this->set('technique',$technique[0]['Technique']['id']);

			$categories = $this->Product->Category->find('list');
			$users = $this->Product->User->find('list');
			$this->set(compact('categories', 'users'));

			$this->loadModel('Technique');
			$techniques=$this->Technique->find('all',array(
				'conditions' => array('Product.' . $this->Product->primaryKey => $id)		
			));
			$count=0;
			$test=array();
			//pr($techniques);

			foreach ($techniques as $item) {
				$arrayName = array('id' =>$item['Technique']['id'],'pid'=>$item['Technique']['pater'],'innercode'=>$item['Technique']['value'],'name'=>$item['Technique']['name'] );
				array_push($test,$arrayName);
			}
			//pr($test);die();
			$this->set('picture',$test);

			$this->loadModel('Picture');
			$Picture=$this->Picture->find('all',array(
				'conditions' => array('Picture.product_id' => $id)		
			));
			$this->set('pictures',$Picture);

		}
		
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
	public function list_product($cate_id=null,$id=null){
		$count=$this->bussiness();
		$this->Product->recursive = 0;
		$this->Paginator->settings = array(
			'conditions' => array('Product.publish'=>1,'Product.category_id'=>$id),
			'limit'=>$count['category_list']
			
		);
		$this->set('products', $this->Paginator->paginate());
	}
	public function home() {
		$count=$this->bussiness();
		$product_new = $this->Product->find('all',
                array(
                    'recursive' => -1,
                    'limit' => $count['number_product'],
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
