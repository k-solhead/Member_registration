<html>
<body>
  <h1>ログイン</h1>
  <form action="login.php" method="POST">
    <p>メールアドレス：<input type="text" name="email">
    <?php echo html_escape($errs['email']); ?></p>

    <p>パスワード：<input type="text" name="password">
    <?php echo html_escape($errs['password']); ?></p>
    <p><input type="submit" value="ログイン">
  </form>
  <p><a href="signup.php">新規登録</a></p>
</body>
</html>