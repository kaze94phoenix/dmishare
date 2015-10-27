<?php

App::uses('AppController', 'Controller');

/**
 * Works Controller
 *
 * @property Work $Work
 * @property PaginatorComponent $Paginator
 */
class WorksController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
// Allow users to register and logout. 
        $this->Auth->allow(array('listWorks'));
    }

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $paginate = array(
        'fields' => array('Work.title', 'Work.created'),
        'limit' => 25,
        'order' => array(
            'Post.title' => 'asc'
        )
    );

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Work->recursive = 0;
        $this->set('works', $this->Paginator->paginate('Work', array('Work.user_id ' => $this->Auth->user('id'))));
    }

    public function listWorks() {
        $this->Work->recursive = 0;
        $works = $this->Work->find('all', array('limit' => 8));
        return $works;
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Work->exists($id)) {
            throw new NotFoundException(__('Invalid work'));
        }
        $options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
        $this->set('work', $this->Work->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $uid = $this->Auth->user('id');
            $this->Work->create();
            $this->request->data["Work"]["user_id"] = $uid;
            if ($this->Work->save($this->request->data)) {
                $this->Session->setFlash(__('The work has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The work could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $users = $this->Work->User->find('list');
        $tags = $this->Work->Tag->find('list');
        $this->set(compact('users', 'tags'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Work->exists($id)) {
            throw new NotFoundException(__('Invalid work'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Work->save($this->request->data)) {
                $this->Session->setFlash(__('The work has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The work could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Work.' . $this->Work->primaryKey => $id));
            $this->request->data = $this->Work->find('first', $options);
        }
        $users = $this->Work->User->find('list');
        $tags = $this->Work->Tag->find('list');
        $this->set(compact('users', 'tags'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Work->id = $id;
        if (!$this->Work->exists()) {
            throw new NotFoundException(__('Invalid work'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Work->delete()) {
            $this->Session->setFlash(__('The work has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The work could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function search() {
            $titulo = $this->request->data['texto'];
            $item=array();
            if($titulo!= ''){
            $this->Work->recursive = -1;
            $item = $this->Work->find('all', array('conditions' => array('work.title LIKE' => '%' . $titulo . '%'), 'contain' => FALSE));
            
            }
            $this->set('result', $item);
            $this->set('name', $titulo);
    }

}
