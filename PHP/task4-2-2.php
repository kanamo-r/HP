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

if ($month >= 3 && $month <= 5) {
    echo $month . "月は春の季節です。";
} elseif ($month >= 6 && $month <= 8) {
    echo $month . "月は夏の季節です。";
} elseif ($month >= 9 && $month <= 11) {
    echo $month . "月は秋の季節です。";
} else {
    echo $month . "月は冬の季節です。";
}
?>
</h1>

</body>
</html>