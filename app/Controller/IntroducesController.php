<?php
App::uses('AppController', 'Controller');
/**
 * Introduces Controller
 *
 * @property Introduce $Introduce
 * @property PaginatorComponent $Paginator
 */
class IntroducesController extends AppController {

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
		$this->Introduce->recursive = 0;
		$this->set('introduces', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Introduce->exists($id)) {
			throw new NotFoundException(__('Invalid introduce'));
		}
		$options = array('conditions' => array('Introduce.' . $this->Introduce->primaryKey => $id));
		$this->set('introduce', $this->Introduce->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Introduce->create();
			if ($this->Introduce->save($this->request->data)) {
				$this->Session->setFlash(__('The introduce has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The introduce could not be saved. Please, try again.'));
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
		if (!$this->Introduce->exists($id)) {
			throw new NotFoundException(__('Invalid introduce'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Introduce->save($this->request->data)) {
				$this->Session->setFlash(__('The introduce has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The introduce could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Introduce.' . $this->Introduce->primaryKey => $id));
			$this->request->data = $this->Introduce->find('first', $options);
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
		$this->Introduce->id = $id;
		if (!$this->Introduce->exists()) {
			throw new NotFoundException(__('Invalid introduce'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Introduce->delete()) {
			$this->Session->setFlash(__('The introduce has been deleted.'));
		} else {
			$this->Session->setFlash(__('The introduce could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
