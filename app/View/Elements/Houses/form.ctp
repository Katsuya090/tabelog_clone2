
    <?= $this->Form->create('House', ['type' => 'file']); ?>
    <?= $this->Form->input('name', ['label' => '建物名']); ?>
    <?= $this->Form->input('addr', ['label' => '住所']); ?>
    <?= $this->Form->input('traffic', ['label' => '交通']); ?>
    <?= $this->Form->input('construction', ['label' => '構造']); ?>
    <?= $this->Form->input('year', ['label' => '築年月']); ?>
    <?= $this->Form->input('floor', ['label' => '総階数']); ?>
    <?= $this->Form->input('room', ['label' => '総戸数']); ?>
    <?= $this->Form->input('price', ['label' => '家賃']); ?>
    <?= $this->Form->input('manegedprice', ['label' => '管理費']); ?>
    <?= $this->Form->label('保険'); ?>
    <?= $this->Form->input('insurance', ['label' => '保険', 'type'=> 'radio','legend'=> false, 'options'=> ['加入要' =>'加入要', '不要' => '不要']]); ?>
    <?= $this->Form->input('company', ['label' => '保証会社', 'type'=> 'select', 'options' => ['加入要' =>'加入要', '不要' => '不要']]); ?>
    <?= $this->Form->input('area', ['label' => '面積']); ?>
    <?= $this->Form->input('floorplan', ['label' => '間取り']); ?>
    <?= $this->Form->input('deposit', ['label' => '敷金']); ?>
    <?= $this->Form->input('keymoney', ['label' => '礼金']); ?>
    <?= $this->Form->input('features', ['label' => '特徴']); ?>
    <?= $this->Form->input('accomodation', ['label' => '設備']); ?>
    <?= $this->Form->input('note', ['label' => 'この物件について']); ?>
    <?=  $this->Form->input('photo', ['type' => 'file', 'label' => '写真']); ?>
    <?= $this->Form->input('photo_dir', ['type' => 'hidden']); ?>
    <?php if (!empty($this->request->data)) : ?>
    <?= $this->Form->hidden('id'); ?>
    <?php endif; ?>
    <?= $this->Form->end('登録する'); ?>
