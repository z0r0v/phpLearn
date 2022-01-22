<?php

declare(strict_types=1);

include '../app/vendor/autoload.php';

use App\Acme\{Foo, Start, Isuserlogin, Operators, Cycle, Get, Post, AnInclude, Counter, OpenWeatherMap};

$counter = new Counter();
$foo = new Foo();
$start = new Start();
$isUserlogin = new Isuserlogin();
$operators = new Operators();
$cycle = new Cycle();
$get = new Get();
$post = new Post();
$anInclude = new AnInclude();
$openWeatherMap = new OpenWeatherMap();
$count = 0;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Docker <?php echo $foo->getName(); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<!--container tets-->
<div class="container">
    <div class="box items">
        <!--        TODO: set counter-->
        <div class="item"><?php $cycle->getCycle(); ?></div>
        <div class="item"><?php $cycle->getTemplateColors(); ?></div>
        <div class="item"><?php $cycle->getWhile(); ?></div>
        <div class="item"><?php $isUserlogin->isUserLogin(); ?></div>
    </div>
    <div class="box items">
        <div class="item">
            <span><?php $count = $counter->getCounterNumber($count);
                echo $count ?></span>
            <h3>Get URL:</h3>
            <div><?= $get->getUrl(); ?></div>
        </div>
        <div class="item">
            <span><?php $count = $counter->getCounterNumber($count);
                echo $count ?></span>
            <h3>Input your name</h3>
            <form>
                <input type="text" name="userName">
                <input type="submit" name="">
            </form>
            <p class="hello-user-name"><?= $get->getHelloUserName(); ?></p>
        </div>
        <div class="item">
            <span><?php $count = $counter->getCounterNumber($count);
                echo $count ?></span>
            <h3>Input your number</h3>
            <p><?= $get->getMessage(); ?></p>
            <form>
                <input type="text" name="numberEvenOdd" type="number">
                <input type="submit" name="">
            </form>
        </div>
        <div class="item">
            <span><?php $count = $counter->getCounterNumber($count);
                echo $count ?></span>
            <h3>Post Method: </h3>
            <form method="post">
                <p>Enter your login</p>
                <input type="text" name="login" type="text">
                <p>Enter your pass</p>
                <input type="text" name="pass" type="number">
                <input type="submit" name="">
                <div class="message" style="color:<?= $post->getColor(); ?>">
                    <?= $post->getMessage(); ?>
                </div>
            </form>
        </div>
    </div>
    <div class="box items">
        <div class="item">
            <span><?php $count = $counter->getCounterNumber($count);
                echo $count ?></span>
            <?php $anInclude->getInclude(); ?>
        </div>
    </div>
</div>

<!--include Saite-->
<div class="container">
    <div class="box items site">
        <div class="site-content">
            <?php $anInclude->getFileContents(); ?>
        </div>
    </div>
</div>

<!--include Weather-->
<div class="container">
    <div class="box items weather">
        <h1>Weather in <?= $openWeatherMap->getNameCity(); ?></h1>
        <form>
            <label for="city">Input your City</label>
            <input class="form-control" type="text" name="city"  id="city" placeholder="Minsk" aria-describedby="Forcast city">
            <button class="primary-btn" type="submit">Submit</button>
        </form>
        <div>
            <?= $openWeatherMap->getWeather(); ?>
        </div>
    </div>
</div>

<!--scripts-->
<!--TODO: dont work FIX => -->
<script src="js/app.js" type="module"></script>
</body>
</html>

