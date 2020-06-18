<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>textファイル書き込み型todoリスト（入力画面）</title>
</head>

<body>
  <form action="create.php" method="post">
    <fieldset>
      <legend>アンケート集計（入力画面）</legend>
      <a href="read.php">一覧画面</a>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        email:<input type="text" name="email">
      </div>
      <div>
        質問（任意）:<input type="text" name="question">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>