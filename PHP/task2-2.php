<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet-task2-2.css">
</head>
<body>

  <?php
    $a = array('name' => '鉛筆','price' => 100, 'tax' => 110);
    $b = array('name' => '消しゴム','price' => 200, 'tax' => 220);
    $c = array('name' => '定規','price' => 300, 'tax' => 330);
   ?>
  
  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込み価格</th>
    </tr>
    <tr>
      <td><?=$a[name];?></td>
      <td><?=$a[price];?></td>
      <td><?=$a[tax];?></td>
    </tr>
    <tr>
      <td><?=$b[name];?></td>
      <td><?=$b[price];?></td>
      <td><?=$b[tax];?></td>
    </tr>
    <tr>
      <td><?=$c[name];?></td>
      <td><?=$c[price];?></td>
      <td><?=$c[tax];?></td>
    </tr>
  </table>

  
</body>
</html>