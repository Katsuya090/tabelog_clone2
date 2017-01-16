<p class="topicPath"><?= $this->Html->link('HOME', '/'); ?> &gt; お問い合わせ</p>
<div id="pageBodyMain">
  <article class="articleDetail">
    <h1 class="pageTitle">お問い合わせ</h1>

    <?php if (count($house['Room']) > 0) : ?>
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
  <?php endif; ?>




<?= $this->element('Inquiries/form', ['submitLabel' => '送信']); ?>
</article>
</div>
