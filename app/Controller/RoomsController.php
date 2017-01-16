<?php

class RoomsController extends AppController {

  public $uses = ['Room', 'House'];


  public function edit($houseId = null) {

    if (!$this->House->exists($houseId)) {
            throw new NotFoundException('物件がみつかりません');
        }

        $userId = $this->Auth->user('id');

        if ($this->request->is(['post', 'put'])) {
            $message = '部屋情報を更新しました';
            if (empty($this->request->data['Room']['id'])) {
                $message = '部屋情報を登録しました';
                $this->Room->create();
            }

            $this->request->data['Room']['user_id'] = $userId;

            if ($this->Room->save($this->request->data)) {
                $this->Flash->success($message);

                return $this->redirect([
                    'controller' => 'houses',
                    'action' => 'view',
                    $houseId
                    ]);
            } else {
                $this->request->data = $this->Room->getData($houseId, $userId);
         }


        }

        $isNew = empty($this->request->data);

          $this->set('houseId', $houseId);
          $this->set('isNew', $isNew);


  }

  public function index() {

  }

  public function add() {

    if (!$this->House->exists($houseId)) {
            throw new NotFoundException('物件がみつかりません');
        }

        $userId = $this->Auth->user('id');

        if ($this->request->is('post')) {
            $this->Room->create();
            if ($this->Room->save($this->request->data['Room']['id'])) {
              $this->Flash->success('部屋情報を登録しました');
                return $this->redirect([
                    'controller' => 'houses',
                    'action' => 'view',
                    $houseId
                    ]);
            }


        }



          $this->set('houseId', $houseId);

  }

  public function delete($id = null) {
        if (!$this->House->exists($houseId)) {
            throw new NotFoundException('部屋情報がみつかりません');
        }

        // 物件のIDを取得
        $houseId = $this->Room->findById($id)['Room']['house_id'];

        $this->request->allowMethod(['post', 'delete']);
        if ($this->Room->delete($id)) {
            $this->Flash->success('部屋情報を削除しました');

            return $this->redirect([
                    'controller' => 'houses',
                    'action' => 'view',
                    $houseId
                ]);
        } else {
            $this->Flash->error('部屋情報を削除できませんでした');
        }
    }
}