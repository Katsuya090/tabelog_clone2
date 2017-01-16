<?php

class HomeController extends AppController {

  public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('index');
    }

  public function index(){
      $this->set('homes', $this->Home->find('all'));

  }
}

