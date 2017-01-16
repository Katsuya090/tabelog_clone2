<h2>一覧表示</h2>
<ul>
    <?php foreach($homes as $home): ?>
        <!-- <?php debug($memo); ?> デバッグ-->

       <!-- 配列のデータを取り出してechoで出力する、h()はエスケープ -->
        <li><?php echo h($home['Home']['information']); ?></li>

    <?php endforeach; ?>
</ul>