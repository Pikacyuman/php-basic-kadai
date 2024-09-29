<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP クラス課題</title>
</head>

<body>
    <p>
        <?php
        // Food クラスを定義
        class Food {
            public $name;
            public $price;

            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            public function show_price() {
                echo "価格: " . $this->price . "円<br>";
            }
        }

        // Animal クラスを定義
        class Animal {
            public $name;
            public $height;
            public $weight;

            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            public function show_height() {
                echo "高さ: " . $this->height . "cm<br>";
            }
        }

        // インスタンスの作成と出力
        $apple = new Food("りんご", 150);
        $giraffe = new Animal("キリン", 500, 800);

        echo "<pre>";
        print_r($apple);
        print_r($giraffe);
        echo "</pre>";

        // メソッドの実行
        $apple->show_price();
        $giraffe->show_height();
        ?>
    </p>
</body>

</html>
