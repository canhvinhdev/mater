<?php
App::uses('AppController', 'Controller');
/**
 * Techniques Controller
 *
 * @property Technique $Technique
 * @property PaginatorComponent $Paginator
 */
class TechniquesController extends AppController {

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
		$this->Technique->recursive = 0;
		$this->set('techniques', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Technique->exists($id)) {
			throw new NotFoundException(__('Invalid technique'));
		}
		$options = array('conditions' => array('Technique.' . $this->Technique->primaryKey => $id));
		$this->set('technique', $this->Technique->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Technique->create();
			if ($this->Technique->save($this->request->data)) {
				$this->Session->setFlash(__('The technique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technique could not be saved. Please, try again.'));
			}
		}
		$products = $this->Technique->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Technique->exists($id)) {
			throw new NotFoundException(__('Invalid technique'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Technique->save($this->request->data)) {
				$this->Session->setFlash(__('The technique has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The technique could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Technique.' . $this->Technique->primaryKey => $id));
			$this->request->data = $this->Technique->find('first', $options);
		}
		$products = $this->Technique->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Technique->id = $id;
		if (!$this->Technique->exists()) {
			throw new NotFoundException(__('Invalid technique'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Technique->delete()) {
			$this->Session->setFlash(__('The technique has been deleted.'));
		} else {
			$this->Session->setFlash(__('The technique could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
