<?php
App::uses('AppController', 'Controller');
/**
 * WorksTags Controller
 *
 * @property WorksTag $WorksTag
 * @property PaginatorComponent $Paginator
 */
class WorksTagsController extends AppController {

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
		$this->WorksTag->recursive = 0;
		$this->set('worksTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->WorksTag->exists($id)) {
			throw new NotFoundException(__('Invalid works tag'));
		}
		$options = array('conditions' => array('WorksTag.' . $this->WorksTag->primaryKey => $id));
		$this->set('worksTag', $this->WorksTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->WorksTag->create();
			if ($this->WorksTag->save($this->request->data)) {
				$this->Session->setFlash(__('The works tag has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The works tag could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$works = $this->WorksTag->Work->find('list');
		$tags = $this->WorksTag->Tag->find('list');
		$this->set(compact('works', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->WorksTag->exists($id)) {
			throw new NotFoundException(__('Invalid works tag'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->WorksTag->save($this->request->data)) {
				$this->Session->setFlash(__('The works tag has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The works tag could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('WorksTag.' . $this->WorksTag->primaryKey => $id));
			$this->request->data = $this->WorksTag->find('first', $options);
		}
		$works = $this->WorksTag->Work->find('list');
		$tags = $this->WorksTag->Tag->find('list');
		$this->set(compact('works', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->WorksTag->id = $id;
		if (!$this->WorksTag->exists()) {
			throw new NotFoundException(__('Invalid works tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->WorksTag->delete()) {
			$this->Session->setFlash(__('The works tag has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The works tag could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
