<?php
// function left(&$array, $index = 0){

// }
// function right(&$array, &$index=0, &$current_line = 0, &$left = 0, &$right = 0 ){
//     for($i = $left; $i <= $right; $i++){
//         $array[$current_line][$i] = $index;
//         $index++;
//     }

// }
// function top(){

// }
// function down(){
//     for($i = $top; $i <= $down; $i++){
//         $array[$current_line][i]
//     }
// }
// $n=5;
// for($i=0; $i<$n; $i++){
//     for($j=0; $j<$n; $j++){
//         array[$i][j]= false;
//     }
// }

// $end = pow($n,2);
// $i=0;

// $top = 0;
// $left = 0;
// $right = $n - 1;
// $down = $n - 1;

// $current_line = 0;
// $current_row = 0;
// while($i<$end){
//     right(array, $i,$current_line, $left, $right );
//     var_dump($array); exit;


//     $i++;
// }
// function output($array) {
//     foreach($array as $line){

//     }
// }
?>








<?php
$array = [
    [
        'item' => 'Товар1',
        'description' => 'Описание товара 1',
        'price' => '100 rub',
    ],
    [
        'item' => 'Товар2',
        'description' => 'Описание товара 2',
        'price' => '200 rub',
    ],
    [
        'item' => 'Товар3',
        'description' => 'Описание товара 3',
        'price' => '300 rub',
    ],
    [
        'item' => 'Товар4',
        'description' => 'Описание товара 4',
        'price' => '400 rub',
    ],
] ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Web-разработка</title>
    <style>
        * {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            height: 100%;
            background-color: bisque;
        }

        .btn {
            margin-top: 30px;
            width: 300px;
            height: 40px;
            background-color: #666cff;
            border-radius: 30px;
            border: 0;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn:hover {
            background-color: black;
            color: white;
        }

        .btn:active {
            background-color: black;
            box-shadow: 0 3px 3px 0 #666;
            transform: translateY(1px);
            color: white;
        }

        .block {
            border-radius: 10px;
            display: inline-block;
            padding: 30px;
            background-color: rgb(255, 255, 255);
            width: 400px;
            height: 500px;
            text-align: center;
        }

        .block:hover {
            box-shadow: 0 3px 3px 0 #666;
            transition: 0.01s;
            border: 1px solid rgb(190, 190, 190);
            border-radius: 10px
        }

        .image {
            width: 300px;
            height: 300px;
            border-radius: 30px;
        }

        .text {
            margin-top: 20px;
            margin-left: 50px;
            font-size: 25px;
            width: 300px;
            word-break: break-all;

        }

        .wrapper {
            margin-top: 10px;
            text-align: center;
            margin-left: 3%;
            display: grid;
            grid-template-columns: repeat(3, 600px);
            grid-template-rows: repeat(2, 600px);
        }

        .navbar {
            background-color: rgb(0, 0, 0);
            width: 100%;
            height: 40px;
            margin: 0;
            padding: 0;
        }

        .wrapernav {

            text-align: center;
            display: grid;
            grid-template-columns: 40px 4fr 4fr 4fr 4fr 4fr 4fr 4fr 4fr 4fr 4fr;

        }

        .buttonnav {
            background-color: rgb(0, 0, 0);
            color: white;
            height: 40px;
            transition: 0.3s;

        }

        .buttonnav:hover {
            background-color: white;
            color: black;
            border: 0;
        }

        .futter {

            background-color: rgba(211, 211, 211, 0.781);
            width: 100%;
            height: 20px;
            margin-top: 10px;
            padding: 0;
            color: rgb(0, 0, 196);
            padding: 9px 30px;
        }

        .logo {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="wrapernav">
            <img src="logo.jpg" alt="logo" class="logo ">
            <button class="buttonnav">
                Главная
            </button>
            <button class="buttonnav">
                О нас
            </button>
            <button class="buttonnav">
                Контакты
            </button>
        </div>
    </div>
        <div class="wrapper">
        <?php foreach ($array as $item): ?>
            <div class="block">
                <span>
                        <?= $item['item'] ?>
                </span>
                <img src="image.jpg" alt="Город" class="image">
                <div class="text">
                    
                        <?= $item['description'] ?>
                   
                </div>
                <button class="btn">
              
                        <?= $item['price'] ?>
                 
                </button>
            </div>
            <?php endforeach; ?>
        </div>
    <div class="futter">
        skjhdfkjsdhfkjhsdkjfhjklsdhfkjlhsdfhsdf
    </div>
</body>

</html>