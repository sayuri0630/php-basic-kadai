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
            public function set_name(string $name) {
                $this->name = $name;
            }
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        // インスタンス化する
        $lunch = new Food();

        // メソッドにアクセスして実行する
        $lunch->set_name('日替りランチ');
        $lunch->show_price('1,500円');

        // インスタンス化する
        $dinner = new Food();

        // プロパティにアクセスし、値を代入する
        $dinner->name = 'コースA';

        // プロパティにアクセスし、値を出力する
        echo $dinner->name;
        ?>
    </p>
    <p>
        <?php
        // クラスを定義する
        class Animal {
            // プロパティを定義する                        
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height.'メートル';
                $this->weight = $weight.'トン';
            }
        }

        // インスタンス化する
        $animal = new Animal('ゾウ', 3, 2);

        // インスタンス$userの各プロパティの値を出力する
        print_r($animal);
        ?>
    </p>
</body>

</html>