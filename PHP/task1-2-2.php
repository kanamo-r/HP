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
  $tax=10;
  $salestax=1+($tax/100);
  define('ENPITSU',100);
  define('KESHIGOMU',200);
  $enpitsutax= ENPITSU * $salestax;
  $keshigomutax= KESHIGOMU * $salestax;
  ?>

  <p>
  現在、消費税は
  <?php echo $tax; ?>
  ％です。
  <br>
  鉛筆が
  <?php echo ENPITSU; ?>
  円で税込
  <?php echo $enpitsutax; ?>
  円です。
  <br>
  消しゴムが
  <?php echo KESHIGOMU; ?>
  円で税込
  <?php echo $keshigomutax; ?>
  円です。
  </p>
  
</body>
</html>