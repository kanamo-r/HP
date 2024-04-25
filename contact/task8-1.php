<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contactページ</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $furigana = $_POST['furigana'];
  $mail = $_POST['mail'];
  $tel = $_POST['tel'];
  $select = $_POST['select'];
  $otoiawase = $_POST['otoiawase'];
  $check = $_POST['check'];
}
$required_fields = [$name, $furigana, $mail, $tel, $select, $otoiawase, $check];

$all_fields_filled = true;
$missing_fields = [];
foreach ($required_fields as $field) {
    if (empty($form_data[$field])) {
        $all_fields_filled = false;
        $missing_fields[] = $field;
    }
}
$mail_valid = strpos($mail, '@') !== false;
$tel_valid = preg_match('/^\d{10,11}$/', $tel);

$button_label = $all_fields_filled && $mail_valid && $tel_valid ? '送信' : '確認';

var_dump($name);
var_dump($furigana);
var_dump($mail);
var_dump($tel);
var_dump($select);
var_dump($otoiawase);
var_dump($check);

?>

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
          <?php
          if (!$all_fields_filled) {
            $missing_fields_list = implode(', ', $missing_fields);
          }
            echo "<p style='color: red; text-align: center;'>以下の項目が未入力です: $missing_fields_list 。これらの項目を埋めてください。</p>"; 
          if (!$mail_valid) {
            echo "<p style='color: red; text-align: center;'>メールアドレスが正しくありません。@を含む有効なメールアドレスを入力してください。</p>";
          }
          if (!$tel_valid) {
            echo "<p style='color: red; text-align: center;'>電話番号が正しくありません。10桁または11桁の有効な電話番号を入力してください。</p>";
          }
          ?>
        </div>
      </div>
    </section>
    <section class="sec_02">
      <div class="wrapper">
        <form action="<?php if ($all_fields_filled && $email_valid && $phone_valid) {
        header('Location: task9-1.php');
        exit;
        }?>" method="POST">
          <table class="sec_02_tbl">
            <tr>
              <th class="sec_02_left">
                <h3>お名前</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right">
                <input type="text" name="name" placeholder="　山田太郎" value="<?=$name?>">
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>フリガナ</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right">
                <input type="text" name="furigana" placeholder="　ヤマダタロウ" value="<?=$furigana?>">
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>メールアドレス</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right">
                <input type="text" name="mail" placeholder="　info@fast-creademy.jp" value="<?=$mail?>">
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>電話番号</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right">
                <input type="text" name="tel" placeholder="　info@fast-creademy.jp" value="<?=$tel?>">
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>お問い合わせ項目</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right">
                <select name="serect">
                  <option value="1">　選択してください</option>
                  <option value="2" selected>　選択肢1</option>
                  <option value="3">　選択肢2</option>
                  <option value="4">　選択肢3</option>
                </select>
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>お問い合わせ内容</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right_0">
                <textarea type="text" name="otoiawase" cols="30" rows="10" placeholder="　こちらにお問い合わせ内容をご記入ください"></textarea>
              </td>
            </tr>
            <tr>
              <th class="sec_02_left">
                <h3>個人情報保護方針</h3>
                <p>必須</p>
              </th>
              <td class="sec_02_right_1">
                <input class="sec_02_check" type="checkbox" name="check" value="1" <?php if ( ! empty( $clean['check'] ) ) { echo 'checked'; } ?>><a class="sec_02_n0" href="">個人情報保護方針</a>に同意します。
              </td>
            </tr>
          </table>
          <input class="sec_02_btn" type="submit" value=<?= $button_label ?>>
        </form>
      </div>
    </section>
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