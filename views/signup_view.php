<html>
<body>
  <h1>新規ユーザー登録</h1>
  <form action="" method="post">
    <p>お名前：<input type="text" name="name"> <?php echo $errs['name']; ?></p>
    <p>メールアドレス：<input type="text" name="email"> <?php echo $errs['email']; ?></p>
    <p>パスワード：<input type="text" name="password"></p>
    <p><input type="submit" value="登録する">
  </form>
</body>
</html>