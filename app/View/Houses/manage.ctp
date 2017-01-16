<p class="topicPath"><?= $this->Html->link('HOME', '/'); ?> &gt; 物件一覧</p>


<h1 class="pageTitle">物件一覧</h1>

<?php if ($currentUser) : ?>
    <div style="text-align: right;">
        <span><?= $this->Html->link('新規追加', ['action' => 'add']); ?></span>
    </div>
<?php endif; ?>

<table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($houses as $house) : ?>
        <tr>
            <td style="width: 10%">
                <?= $this->Html->link(
                    $this->House->photoImage($house, ['style' => 'width: 100%']),
                    ['action' => 'view', $house['House']['id']],
                    ['escape' => false]
                    ); ?>
            </td>
            <td style="width: 70%">
            <?= $this->Html->link(
                $house['House']['name'],
                ['action' => 'view', $house['House']['id']]
            );?>
            </td>

            <td style="width: 10%">
                <?php
                    if (count($house['Room']) > 0) {
                        echo '現在募集中部屋は' .count($house['Room']).'件です。';


                    } else {
                        echo '現在募集中部屋: 0 件';
                    }
                ?>
            </td>
            <?php if ($currentUser) : ?>
                <td style="width: 5%;">
                    <?= $this->Html->link(
                        '編集',
                        ['action' => 'edit', $house['House']['id']]
                    ); ?>
                </td>
                <td style="width: 5%;">
                    <?= $this->Form->postLink(
                        '削除',
                        ['action' => 'delete', $house['House']['id']],
                        ['confirm' => '本当に削除してよろしいですか？']
                    ); ?>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div style="text-align: center ">
    <?= $this->Paginator->prev('< 前へ'); ?>&nbsp;
    <?= $this->Paginator->numbers(); ?>&nbsp;
    <?= $this->Paginator->next('次へ >'); ?>

</div>
