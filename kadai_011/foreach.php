<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
    <p> 
      <?php
       // 連想配列を作成し、変数に代入
     $product = [
        '名前' => '玉ねぎ',
        '値段' => 200,
        '産地' => '北海道'
      ];
       // foreach文を使い、配列のキーと値を出力
       foreach ($product as $key => $value) {
           echo $key . ':' . $value . "<br>";
       }
     ?>
   </p>
</body>

</html>