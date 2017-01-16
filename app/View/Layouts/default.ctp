
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		// echo $this->Html->css('cake.generic');

		echo $this->Html->css('common/css/nomalize.css');
		echo $this->Html->css('common/css/style.css');
		// echo $this->Html->css('cake.app.css');
		// echo $this->Html->css('style.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>



<meta name="description" content="komorikomashaは、コモモ･モリコ･ひろましゃ3人のメンバーが勢いでつくったものや活動を紹介しているサイトです。">

</head>

<body>
	<div id="page">
<header id="pageHead">
  <h1 id="siteTitle">成城経営研究会 不動産事業部</h1>
  <nav class="globalNavi">
    <ul>
      <li class="<?php if ($this->request->controller == 'home'): ?>current<?php endif ?>"><?= $this->Html->link('HOME', '/'); ?></li>
      <li class="<?php if ($this->request->controller == 'about'): ?>current<?php endif ?>"><?= $this->Html->link(
          '会社概要',
          ['controller' => 'about', 'action' => 'index']
        );?></li>
      <li class="<?php if ($this->request->controller == 'business'): ?>current<?php endif ?>"><?= $this->Html->link(
          '事業案内',
          ['controller' => 'business', 'action' => 'index']
        );?></li>
      <li class="<?php if ($this->request->controller == 'houses'): ?>current<?php endif ?>"><?= $this->Html->link(
          '物件一覧',
          ['controller' => 'houses', 'action' => 'index']
        );?></li>
      <li class="<?php if ($this->request->controller == 'inquiry'): ?>current<?php endif ?>"><?= $this->Html->link(
          'お問い合わせ',
          ['controller' => 'inquiry', 'action' => 'index']
        );?></li>
    </ul>
  </nav>
</header>
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

		<footer id="pageFoot">
  <p id="copyright"><small>Copyright&copy; 2016 @seijokeieikenkyoukai All Rights Reserved.</small></p>
</footer>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
