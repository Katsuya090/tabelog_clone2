<p class="topicPath"><?= $this->Html->link('HOME', '/'); ?> &gt; <?= $this->Html->link('物件一覧', 'index'); ?> &gt; <?= $house['House']['name']; ?></p>




<div style="width: 100%; height: 80px;">
  <span style="float: left;"><h2 class="pageTitle"><?= $house['House']['name']; ?></h2></span>

</div>

<div id="house">
<span><h3>物件情報</h3></span>
  <table>

      <tr>

            <td colspan="4">
              <?=  $this->House->photoImage($house,['style' => 'width:300px']); ?>
            </td>
      </tr>

      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">建物名</td>
        <td style="width: 25%;"><?= $house['House']['name'];?></td>
        <td style="width: 25%; background-color: #EEEEEE;" >住所</td>
        <td style="width: 25%;"><?= $house['House']['addr'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">交通</td>
        <td style="width: 25%;"><?= $house['House']['traffic'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">構造</td>
        <td style="width: 25%;"><?= $house['House']['construction'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">築年月</td>
        <td style="width: 25%;"><?= $house['House']['year'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">総階数</td>
        <td style="width: 25%;"><?= $house['House']['floor'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">総戸数</td>
        <td style="width: 25%;"><?= $house['House']['room'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">家賃</td>
        <td style="width: 25%;"><?= $house['House']['price'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">管理費</td>
        <td style="width: 25%;"><?= $house['House']['manegedprice'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">保険</td>
        <td style="width: 25%;"><?= $house['House']['insurance'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">保証会社</td>
        <td style="width: 25%;"><?= $house['House']['company'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">面積</td>
        <td style="width: 25%;"><?= $house['House']['area'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">間取り</td>
        <td style="width: 25%;"><?= $house['House']['floorplan'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">敷金</td>
        <td style="width: 25%;"><?= $house['House']['deposit'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">礼金</td>
        <td style="width: 25%;"><?= $house['House']['keymoney'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">特徴</td>
        <td style="width: 25%;"><?= $house['House']['features'] ;?></td>
      </tr>
      <tr>
        <td style="width: 25%; background-color: #EEEEEE;">設備</td>
        <td style="width: 25%;"><?= $house['House']['accommodation'] ;?></td>
        <td style="width: 25%; background-color: #EEEEEE;">物件について</td>
        <td style="width: 25%;"><?= $house['House']['note'] ;?></td>
      </tr>

  </table>

  <?php if (count($house['Room']) > 0) : ?>
    <div style="margin-top: 30px;">
        <span>部屋情報一覧</span>
        <table>
          <tbody>
                 <tr>
                    <th>入居</th>
                    <th>所在階</th>
                    <th>間取り</th>
                    <th>面積</th>
                    <th>賃料</th>
                    <th>管理費</th>
                    <th>敷金</th>
                    <th>礼金</th>
                    <th>仲介料</th>
                    <th></th>
                    <th></th>
                  </tr>


                <?php foreach($house['Room'] as $room): ?>
                <tr>
                    <td><?= h($room['time']); ?></td>
                    <td><?= h($room['name']); ?></td>
                    <td><?= h($room['floorplan']); ?></td>
                    <td><?= h($room['area']); ?></td>
                    <td><?= h($room['price']); ?></td>
                    <td><?= h($room['manegedprice']); ?></td>
                    <td><?= h($room['deposit']); ?></td>
                    <td><?= h($room['keymoney']); ?></td>
                    <td><?= h($room['brokerage']); ?></td>
                    <td><?= $this->Form->postLink(
                        '削除',
                        [
                            'controller' => 'rooms',
                            'action' => 'delete',
                            'house_id' => $house['House']['id']],
                            ['confirm' => '本当に削除してよろしいですか？']

                    ); ?>
                    </td>
                    <td><?= $this->Form->postLink(
                        '編集',
                        [
                            'controller' => 'rooms',
                            'action' => 'edit',
                            'house_id' => $house['House']['id']]
                    ); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  <?php else: ?>
    <div style="margin-top: 30px;">
        <p>現在募集している部屋はありません。</p>
    </div>
  <?php endif; ?>

  <?php if ($currentUser) : ?>
    <div style="margin-top: 20px;">
        <div style="text-align: right;">
            <?= $this->Html->link(
                '部屋情報を登録する',
                [
                    'controller' => 'rooms',
                    'action' => 'add',
                    'house_id' => $house['House']['id'],
                ]
            ); ?>

        </div>

    </div>
  <?php endif; ?>




  <p class="btn"><?= $this->Html->link(
                            'お問い合わせ',
                            ['controller' => 'inquiry', 'action' => 'index', $house['House']['id']]
                            ); ?></p>

</div>

