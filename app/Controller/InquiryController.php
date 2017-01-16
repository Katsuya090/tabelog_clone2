<?php

class InquiryController extends AppController {
    public $uses = ['House'];

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('index');
    }

    public function index($houseId = null) {
      // $this->set('inquiries');
      // var_dump($houseId);

    //   if (!$this->House->exists($houseId)) {
    //   throw new NotFoundException('物件が見つかりません。');
    // }

    $this->set('house', $this->House->findById($houseId));
    $this->set('houseId', $houseId);

      if ($this->request->is('post')){
        $this->Inquiry->create();

        if ($this->Inquiry->save($this->request->data)) {
          $this->Flash->success('お問い合わせしました。');
          return $this->redirect(['action' => 'thanks']);
        }

      }
    }

    public function thanks() {

    }

    public function check() {
      $this->set('inquiries', $this->Inquiry->find('all'));
    }
}



















