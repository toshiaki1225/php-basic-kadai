<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP課題</title>
</head>
<body>
  <p>
    <?php

    class Food {
      private $name;
      private $price;

      public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
       }

      public function show_price(){
        echo $this->price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      } 
      
      function show_height(){
        echo $this->height;
      }
    }
    
    $apple = new Food('apple', 300); 
    print_r($apple);
    echo '<br>';
    $tiger = new Animal('tiger', 90, 150);
    print_r($tiger);
    echo '<br>';

    $apple->show_price();
    echo '<br>';
    $tiger->show_height();


    ?>
  </p>
</body>
</html>