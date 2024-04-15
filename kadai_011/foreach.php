<!DOCTYPE html>
<html  lang="ja">
<head>
<meta charset="UTF-8">
</head>
<body>
  <p>
    <?php
    $veges = ['名前'=>'玉ねぎ', '値段'=>'200', '産地'=>'北海道'];
    foreach($veges as $key => $veg){
      echo "{$key}:{$veg}  <br>";
    }
    ?>
  </p>
</body>
</html>