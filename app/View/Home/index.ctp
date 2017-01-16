<div id="pageBody">
<section class="mainVisual">
  <div class="mainVisualText">
    <h1>Good House Good Life</h1>
    <p>快適な住まいを見つけて<br>
    生活を豊かにしよう♪</p>
  </div>
  <?php
      echo $this->Html->image('IMG_0165.jpg', ['width' => '980'],['height' => '500'])
   ?>
</section>

<section class="news">
<h1>お知らせ</h1>
<table>

    <?php foreach ($homes as $home): ?>
        <tr>
            <th><?= $home['Home']['created'] ?></th>
            <td><?php echo h($home['Home']['information']); ?></td>
        </tr>
    <?php endforeach; ?>

    </table>
</section>

</div>

<p class="pagetop"><a href="#page">ページの先頭へ戻る</a></p>