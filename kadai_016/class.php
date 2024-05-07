<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
        <?php
        class Food {
            private $name;
            private $price;

            public function show_price($price) {
                echo $this->price;
            }

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price; 
            }
        }

        $food = new Food('potato',250);
        print_r($food);
        echo '<br>';
        
        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height($height) {
                echo $this->height;
            }

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;  
            }
        }

        $animal = new Animal('dog', '60', 5000);
        print_r($animal);
        echo '<br>';

        $food->show_price(250);
        echo '<br>';

        $animal->show_height(60);
        ?>
</body>
</html>