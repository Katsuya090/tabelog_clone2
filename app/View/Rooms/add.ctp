-<h2>部屋情報追加</h2>

<?php
    $titleLabel = '追加';
    $submitLabel ='登録';
?>

<h2>部屋情報<?= $titleLabel; ?></h2>

<?= $this->Form->create('Room'); ?>
    <?= $this->Form->input('time', ['label' => '入居時期']); ?>
    <?= $this->Form->input('name', ['label' => '所在階']); ?>
    <?= $this->Form->input('addr', ['label' => '住所']); ?>
    <?= $this->Form->input('traffic', ['label' => '交通']); ?>

    <?= $this->Form->input('year', ['label' => '築年月']); ?>

    <?= $this->Form->input('price', ['label' => '家賃']); ?>
    <?= $this->Form->input('manegedprice', ['label' => '管理費']); ?>

    <?= $this->Form->input('area', ['label' => '面積']); ?>
    <?= $this->Form->input('floorplan', ['label' => '間取り']); ?>
    <?= $this->Form->input('deposit', ['label' => '敷金']); ?>
    <?= $this->Form->input('keymoney', ['label' => '礼金']); ?>
    <?= $this->Form->input('brokerage', ['label' => '仲介手数料']); ?>
    <?= $this->Form->input('roomdetail1', ['label' => '部屋1']); ?>
    <?= $this->Form->input('roomdetail2', ['label' => '部屋2']); ?>
    <?= $this->Form->input('roomdetail3', ['label' => '部屋3']); ?>
    <?= $this->Form->input('roomdetail4', ['label' => '部屋4']); ?>
    <?= $this->Form->input('roomdetail5', ['label' => '部屋5']); ?>

    <?= $this->Form->hidden('id'); ?>
    <?= $this->Form->hidden('house_id', ['value' => $houseId]); ?>
    <?= $this->Form->end($submitLabel); ?>