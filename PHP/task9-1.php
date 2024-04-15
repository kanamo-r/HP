<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<header>
    <div class="header">
      <h1>ここには会社名が入ります</h1>
      <div class="head_btn">
        <a href="#" class="head_btn_01">ボタン01</a>
        <a href="#" class="head_btn_02">ボタン02</a>
      </div>
    </div>
  </header>
  <div class="mv">
    <div class="mv_content">
      <a href="#" class="menu">メニュー01</a>
      <a href="#" class="menu">メニュー02</a>
      <a href="#" class="menu">メニュー03</a>
    </div>
    <h1>
      <img src="C:\Users\kll04\Desktop\課題\contact\mv.png" alt>
    </h1>
  </div>
  <main>
    <section class="sec_01">
      <div class="wrapper">
        <div class="sec_01_box">
          <h1>お問い合わせ</h1>
          <p>
            お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。
            <br>
            後ほど担当者よりご連絡させていただきます。
          </p>
        </div>
      </div>
    </section>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $dsn = 'mysql:dbname=consumer;host=localhost;charset=utf8';
      $user = 'ユーザー名';
      $password = 'パスワード';

    try {
      $dbh = new PDO($dsn, $user, $password);

      $sql = 'INSERT INTO テーブル名 (id, 各入力されたデータ, 日時) VALUES (:id, :data, :datetime)';
      $stmt = $dbh->prepare($sql);

      $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
      $stmt->bindValue(':data', $_POST['data'], PDO::PARAM_STR);
      $stmt->bindValue(':datetime', date('Y-m-d H:i:s'), PDO::PARAM_STR);

      $stmt->execute();

      echo '送信完了しました。';
    } catch (PDOException $e) {
      echo 'データベースエラー: ' . $e->getMessage();
    }
}
?>

<section class="sec_btn">
      <div class="wrapper">
        <div class="sec_btn_box">
          <div class="sec_btn_left">
            <h2>こちらからご購入ください</h2>
            <a href="#" class="btn_01">ネットショップ</a>
          </div>
          <div class="sec_btn_right">
            <h2>お気軽にお問い合わせください</h2>
            <a href="#" class="btn_02">お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>
    <section class="sec_05">
      <div class="wrapper">
        <div class="sec_05_p01">
          <p>ここには会社名が入ります</p>
        </div>
        <div class="sec_05_p02">
          <p>
            住所が入ります
            <br>
            03-1234-5678
            <br>
            営業時間：9:00～18:00
          </p>
        </div>
      </div>
    </section>
    <section class="sec_06">
      <div class="wrapper">
        <div class="sec_06_box_01">
          <a href="#">リンク01</a>
          <a href="#">リンク02</a>
          <a href="#">リンク03</a>
          <a href="#">リンク04</a>
          <a href="#">リンク05</a>
          <a href="#">リンク06</a>
        </div>
        <div class="sec_06_box_02">
          <a href="#">リンク07</a>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>ここには会社名が入ります©Copyright.</p>
  </footer>
</body>
</html>