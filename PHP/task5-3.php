<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
  $products = array(
    array("商品" => "鉛筆", "価格" => "100円", "税込価格" => "110円"),
    array("商品" => "消しゴム", "価格" => "200円", "税込価格" => "220円"),
    array("商品" => "定規", "価格" => "300円", "税込価格" => "330円")
  );

  echo "<table>";
  echo "<tr><th>商品</th><th>価格</th><th>税込価格</th></tr>";
  foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["商品"] . "</td>";
    echo "<td>" . $product["価格"] . "</td>";
    echo "<td>" . $product["税込価格"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
  ?>
  
</body>
</html>