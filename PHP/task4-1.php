<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>
今日の運勢は"<?php
$rand = mt_rand(1, 100);

if ($rand <= 5) {
    echo '大凶';
} elseif ($rand <= 20) {
    echo '凶';
} elseif ($rand <= 50) {
    echo '吉';
} elseif ($rand <= 80) {
    echo '中吉';
} else {
    echo '大吉';
}
?>
"です。
</h1>

</body>
</html>