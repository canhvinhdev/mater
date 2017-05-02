<?php
App::uses('AppController', 'Controller');
/**
 * Supporters Controller
 *
 * @property Supporter $Supporter
 * @property PaginatorComponent $Paginator
 */
class SupportersController extends AppController {

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
		$this->Supporter->recursive = 0;
		$this->set('supporters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Supporter->exists($id)) {
			throw new NotFoundException(__('Invalid supporter'));
		}
		$options = array('conditions' => array('Supporter.' . $this->Supporter->primaryKey => $id));
		$this->set('supporter', $this->Supporter->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Supporter->create();
			if ($this->Supporter->save($this->request->data)) {
				$this->Session->setFlash(__('The supporter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supporter could not be saved. Please, try again.'));
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
		if (!$this->Supporter->exists($id)) {
			throw new NotFoundException(__('Invalid supporter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Supporter->save($this->request->data)) {
				$this->Session->setFlash(__('The supporter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The supporter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Supporter.' . $this->Supporter->primaryKey => $id));
			$this->request->data = $this->Supporter->find('first', $options);
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
		$this->Supporter->id = $id;
		if (!$this->Supporter->exists()) {
			throw new NotFoundException(__('Invalid supporter'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Supporter->delete()) {
			$this->Session->setFlash(__('The supporter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The supporter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
