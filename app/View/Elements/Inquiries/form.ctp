<?= $this->Form->create('Inquiry'); ?>
<?= $this->Form->input('name', ['label' => 'お名前']); ?>
<?= $this->Form->input('email', ['label' => 'メールアドレス']); ?>
<?= $this->Form->input('tel', ['label' => '電話番号']); ?>
<?= $this->Form->input('kind', ['label' => 'ご希望の連絡方法', 'type' => 'radio', 'legend'=> false, 'options' => ['電話'=>'電話', 'メール'=>'メール']]); ?>
<?= $this->Form->input('when', ['label' => '入居希望時期', 'type' => 'radio', 'legend'=> false, 'options' => ['今すぐ'=>'今すぐ', '3ヶ月以内'=>'3ヶ月以内', '良い物件が見つかれば'=>'良い物件が見つかれば']]); ?>
<?= $this->Form->input('note', ['label' => 'ご要望、ご希望', 'type' => 'textarea']); ?>
<?php if (!empty($this->request->data)) : ?>
<?= $this->Form->hidden('house_id', ['value' => $houseId]); ?>
<?php endif; ?>
<?= $this->Form->end($submitLabel); ?>
