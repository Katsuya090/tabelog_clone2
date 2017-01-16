<?php

class HousesController extends AppController {

  public $uses = ['House', 'Room'];

  public $helpers = ['House'];

  public $components = [
      'Paginator' => [
        'Limit' => 10,
        'order' => ['created' => 'desc']
      ]
  ];

  public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('index', 'view');
    }

  public function index(){
    // $this->set('houses', $this->House->find('all'));
    $this->set('houses', $this->Paginator->paginate());

    // ページネーションの設定
        $this->Paginator->settings = [
            'House' => [
                'limit' => 10,                  // 1ページ内に表示するデータ数
                'order' => [                    // 並び順
                    'House.created' => 'desc',
                    'House.name' => 'asc',
                ],

                // JOIN の設定
                'joins' => [
                    [
                        'type' => 'LEFT',                           // LEFT JOIN
                        'table' => 'rooms',                       // reviews テーブルを JOIN する
                        'alias' => 'Room',                        // エイリアスを Review とする
                        'conditions' => 'House.id = Room.house_id', // JOIN の条件
                    ],
                ],
                // 表示する項目
                'fields' => [
                    'House.id', 'House.name', 'House.photo', 'House.photo_dir',
                    'count(Room.id) as House__cnt',            // レビュー件数の別名にバーチャルフィールド(cnt)を設定
                ],


            ],
        ];
        $houses = $this->Paginator->paginate('House');

        // debug($shops);    // ここでデバッグプリントすると JOIN の結果が分かりやすく、設定を調整しやすい
        // die;

        $this->set('houses', $houses);

  }

  public function view($id = null){
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件が見つかりません。');
    }

    $this->set('house', $this->House->findById($id));
  }

  public function add() {
    if ($this->request->is('post')){
      $this->House->create();

      if ($this->House->save($this->request->data)) {
        $this->Flash->success('物件を登録しました。');
        return $this->redirect(['action' => 'index']);
      }
    }
  }

  public function edit($id = null) {
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件がみつかりません。');
    }

    if ($this->request->is(['post', 'put'])) {
      if ($this->House->save($this->request->data)) {
        $this->Flash->success('物件を更新しました。');
        return $this->redirect(['action' => 'index']);
      }
    } else {
        $this->request->data = $this->House->findById($id);
    }

  }

  public function delete($id = null) {
    if (!$this->House->exists($id)) {
      throw new NotFoundException('物件がみつかりません');
    }

    $this->request->allowMethod('post', 'delete');

    if ($this->House->delete($id)) {
    $this->Flash->success('物件を削除しました');
    } else {
        $this->Flash->error('物件を削除できませんでした');
    }

    return $this->redirect(['action' => 'index']);

  }

  public function manage() {
    $this->set('houses', $this->Paginator->paginate());
  }
}





















