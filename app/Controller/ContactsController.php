<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');
/**
 * Contacts Controller
 *
 * @property Contact $Contact
 * @property PaginatorComponent $Paginator
 */
class ContactsController extends AppController {

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
		if ($this->request->is('post')) {
			$this->Contact->create();
			$this->request->data['Contact']['publish']=0;
			date_default_timezone_set("Asia/Bangkok");
			$this->request->data['Contact']['created']=strtotime(date('Y-m-d H:i:s'));
			//var_dump($this->request->data);die();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
			}
		}
		// $this->Contact->recursive = 0;
		// $this->set('contacts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_contact() {
		 $this->Contact->recursive = 0;
		 $this->set('contacts', $this->Paginator->paginate());
	}



	public function admin_sent_email($id=null){
		
        if ($this->request->is('post')) {
        	//var_dump($this->request->data);die();
        	$mail_admin=$this->request->data['receive'];
        	$subject=$this->request->data['subject'];
        	$content=$this->request->data['Contact']['content'];


   			$sendEmail  = new CakeEmail();
			$sendEmail 	-> config('smtp')
					-> to($mail_admin)
					-> subject($subject)
					-> template('contact')
					-> emailFormat('html')
					-> viewVars(array('message' => $content))
					-> send(); 

			$this->Contact->create();
			$this->Contact->id = $id;
			$this->request->data['Contact']['publish']=1;
			$this->Contact->save($this->request->data);

			return $this->redirect(array('action' => 'admin_contact'));

        }else{
        	$contact = $this->Contact->find('all',
                array(
                    'recursive' => -1,
                    'conditions' => array('Contact.id'=>$id)
	            )
	        );
        	$this->set(compact('contact'));

        }

	}
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contact->create();
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
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
		if (!$this->Contact->exists($id)) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contact->save($this->request->data)) {
				$this->Session->setFlash(__('The contact has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contact could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contact.' . $this->Contact->primaryKey => $id));
			$this->request->data = $this->Contact->find('first', $options);
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
		$this->Contact->id = $id;
		if (!$this->Contact->exists()) {
			throw new NotFoundException(__('Invalid contact'));
		}
		if ($this->Contact->delete()) {
			$this->Session->setFlash(__('The contact has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contact could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'admin_contact'));
	}
}
