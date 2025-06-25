<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>

以下の条件を満たすクラスを２つ作成

- プログラミング言語: PHP
- クラス名: Food
- プロパティ
    - $name（食べ物名）
    - $price（値段）
- コンストラクタ: 「price」プロパティの値を出力する
- メソッド: 「show_price」それぞれのクラスに作成したメソッドにアクセスしメソッドを実行

また、以下の実行結果も生成

1. 以下のインスタンスを作成する
    1. 食べ物名: 日替りランチ
    2. 値段: 1,500円
2. 各プロパティに直接アクセスし、値を出力する

- プログラミング言語: PHP
- クラス名: Animal
- プロパティ
    - $name（動物名）
    - $height（全長）
    - $weight（体重）
- コンストラクタ: 「height」 プロパティの値を出力する
- メソッド: 「show_height」それぞれのクラスに作成したメソッドにアクセスしメソッドを実行

また、以下の実行結果も生成

1. 以下のインスタンスを作成する
    1. 動物名: ゾウ
    2. 全長: 約3メートル
    3. 体重: ２トン
2. 各プロパティに直接アクセスし、値を出力する

</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food {
            // プロパティを定義する                        
            public $name;
            public $price;
            // メソッドを定義する
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }
            public function getName() {
                return $this->name;
            }

            public function getPrice() {
                return $this->price;
            }
          }
  
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height.'M';
                $this->weight = $weight.'t';
            }
            public function getName() {
              return $this->name;
            }

            public function getHeight() {
              return $this->height;
            }

            public function getWeight() {
              return $this->weight;
            }
          }
          
          $food = new Food('日替りランチ', 1500);
          $animal = new Animal('elephant', 3, 2);

              echo $food->getName() . " " . $food->getPrice() . PHP_EOL;
              echo $animal->getName() . " " . $animal->getHeight();
        ?>
    </p>
</body>

</html>