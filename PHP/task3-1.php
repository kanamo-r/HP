<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> 

  <?php 
    $tax=10;
    $salestax=1+($tax/100);
    $a = array('name' => '鉛筆','price' => 100,);
    $b = array('name' => '消しゴム','price' => 200,);

    $enpitsutax= $a[price] * $salestax;
    $keshigomutax= $b[price] * $salestax;
    $enpitsu1dz= $enpitsutax * 12;
    $keshigomu1dz= $keshigomutax * 12;

  ?>
  
  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <tr>
      <td><?=$a[name];?></td>
      <td><?=$a[price];?></td>
      <td><?=$enpitsutax;?></td>
      <td><?=$enpitsu1dz;?></td>
    </tr>
    <tr>
      <td><?=$b[name];?></td>
      <td><?=$b[price];?></td>
      <td><?=$keshigomutax;?></td>
      <td><?=$keshigomu1dz;?></td>
    </tr>
  </table>
  
</body>
</html>