<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h1>九九の計算</h1>
  
  <table>
  <?php
  for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        echo $i . " × " . $j . " = " . $i * $j . "</td>";
    }
    echo "\n";
  }
  ?>
  </table>

</body>
</html>