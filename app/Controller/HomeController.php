<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppController', 'Controller');

/**
 * CakePHP HomeController
 * @author Osvaldo Maria
 */
class HomeController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('index','start'));
    }

    public function index() {
        $this->layout = 'ajax';
    }
    
    public function start(){
        $this->layout = 'ajax';
        
    }

}
