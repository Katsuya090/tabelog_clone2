<div id="navbar">
  <p>成城経営研究会 不動産賃貸事業部</p>
  <ul>
      <li><?= $this->Html->link('HOME', '/'); ?></li>
      <li>
        <?= $this->Html->link(
          'レストラン一覧',
          ['controller' => 'shops', 'action' => 'index']
        );?>
      </li>
      <li>
        <?= $this->Html->link(
          '事業案内',
          ['controller' => 'business', 'action' => 'index']
        );?>
      </li>
      <li>
        <?= $this->Html->link(
          '会社概要',
          ['controller' => 'about', 'action' => 'index']
        );?>
      </li>
      <li>
        <?= $this->Html->link(
          '物件一覧',
          ['controller' => 'houses', 'action' => 'index']
        );?>
      </li>
      <li>
        <?= $this->Html->link(
          'お問い合わせ',
          ['controller' => 'inquiry', 'action' => 'index']
        );?>
      </li>
  </ul>
  <ul class="menu navbar-right">
        <?php if ($currentUser) : ?>
            <li class="menu-li">
                <a href="#" class="caret-down"><?= $currentUser['email'] ?></a>
                <ul class="menu-second">
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            '会員情報変更',
                            ['controller' => 'users', 'action' => 'edit']
                        ); ?>
                    </li>
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            'パスワード変更',
                            ['controller' => 'users', 'action' => 'changePassword']
                        ); ?>
                    </li>
                    <li class="menu-second-li">
                        <?= $this->Html->link(
                            'ログアウト',
                            ['controller' => 'users', 'action' => 'logout']
                        ); ?>
                    </li>
                </ul>
            </li>
        <?php else : ?>
            <li>
                <?= $this->Html->link(
                    '新規会員登録',
                    ['controller' => 'users', 'action' => 'add']
                ); ?>
            </li>
            <li>
                <?= $this->Html->link(
                    'ログイン',
                    ['controller' => 'users', 'action' => 'login']
                ); ?>
            </li>
        <?php endif; ?>
    </ul>
</div>