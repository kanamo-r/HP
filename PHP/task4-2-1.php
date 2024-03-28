<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>
<?php
$month = mt_rand(1, 12);

switch ($month) {
  case 3:
  case 4:
  case 5:
    echo $month . "月は春の季節です。";
    break;
  case 6:
  case 7:
  case 8:
    echo $month . "月は夏の季節です。";
    break;
  case 9:
  case 10:
  case 11:
    echo $month . "月は秋の季節です。";
    break;
  default:
    echo $month . "月は冬の季節です。";
}
?>
</h1>
  
</body>
</html>