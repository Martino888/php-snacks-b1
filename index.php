<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks PHP</title>
</head>
<body>

    <!-- SNACKE NUMBER 1 -->
    <div class="snak1">
        <h2>Snack number 1</h2>
        <?php $arr_game=
            [
                [
                    'home' =>
                    [
                        'name' => 'Olimpia Milano',
                        'score' => 55,
                    ],
                    'out' =>
                    [
                        'name' => 'Cantu',
                        'score' => 60,
                    ],
                ],
                [
                    'home' =>
                    [
                        'name' => 'Bologna',
                        'score' => 70,
                    ],
                    'out' =>
                    [
                        'name' => 'Genova',
                        'score' => 33,
                    ],
                ],
                [
                    'home' =>
                    [
                        'name' => 'Napoli',
                        'score' => 100,
                    ],
                    'out' =>
                    [
                        'name' => 'Ancona',
                        'score' => 87,
                    ],
                ]
            ];

            for ($i = 0; $i < count($arr_game); $i++) { ?>
                <span><?= $arr_game[$i]['home']['name'] ?> - </span>
                <span><?= $arr_game[$i]['out']['name'] ?> | </span>
                <span><?= $arr_game[$i]['home']['score'] ?> - </span>
                <span><?= $arr_game[$i]['out']['score'] ?></span>
                <br>
                <?php
            }
        ?>
    </div>

<hr>

    <!-- SNACKE NUMBER 2 -->
    <div class="two">
        <h2>Snack number 2</h2>
        <?php
            if (isset($_GET['name-user']) && $_GET ['email-user'] && $_GET['age-user']) {
                if((strlen($_GET['name-user']) > 3) && (strpos($_GET['email-user'], '@')) && (strpos($_GET['email-user'], '.', -4)) && (is_numeric($_GET['age-user']))){
                    echo 'Login successful';
                } else {
                    echo 'Access denied';
                }
            }
        ?>

        <form action="" method="GET">
            <label for="name-user">Enter your name</label>
            <input type="text" id="name-user">

            <label for="email-user">Enter your email</label>
            <input type="email" id="email-user">

            <label for="age-user">Enter your age</label>
            <input type="number" id="age-user">

            <button>Login</button>
        </form>
    </div>

<hr>
    <!-- SNACK 3 -->

        <h2>Snack number 3</h2>
<div>
    <?php
    $array = [];
$n = 13;
$min = 0;
$max = 50;


if($max >= $n - 1) {
    for ($i=0; $i < $n ; $i++) {
        $num = rand($min,$max);
        while(in_array($num,$array)) {
            $num = rand($min,$max);
        }
        $array [] = $num;
    }
    asort($array);
};
?>

<div>
<ol>
<?php
foreach ($array as $num) {
?>
<li>
    <span>
        <?php
        echo $num;
        ?>
    </span>
</li>
<?php
}
?>
</div>

<hr>
    <!-- SNACK 4 -->

    <div class="four">
        <h2>Snack number 4</h2>
        <?php
        $txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, quisquam. Vitae consectetur id quam alias. Earum harum aliquam doloremque nulla incidunt itaque voluptate iure provident excepturi nam perferendis fuga? Veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto neque voluptatem illum distinctio libero ea officiis eaque quae, ad laborum dolorum sint itaque nemo nihil aliquid blanditiis, vero adipisci reiciendis! Lorem ipsum dolor sit amet. Consectetur adipisicing elit. Quia vitae incidunt necessitatibus optio magni dicta magnam sit voluptatum est doloremque deserunt asperiores iste dolores, neque adipisci alias aut amet et!';

        $txt_explode = explode(',', $txt);
        for ($i=0; $i < count($txt_explode) ; $i++) {
            echo $txt_explode[$i] . '</p><p>';
        }

        ?>
    </div>
</body>
</html>
