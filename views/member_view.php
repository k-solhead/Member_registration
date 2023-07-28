<html>
<body>
  <p>こんにちは<?php echo html_escape($member['name']); ?>さん。</p>
  <p>Email:<?php echo html_escape($member['email']); ?></p>
  <p><a href="logout.php">ログアウト</a></p>
  <h1>会員専用ページ</h1>
  <hr width="300px" align="left">
  <p styke="font-size:small">こちらはログイン後の画面です</p>
  <h2>会員一覧</h2>
  <ul>
    <?php foreach($members as $member): ?>
      <li><?php echo html_escape($member['name']); ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>