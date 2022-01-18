<?php

include '../app/vendor/autoload.php';

$foo = new App\Acme\Foo();
$start = new App\Acme\Start();
$isUserlogin = new App\Acme\Isuserlogin();
$operators = new App\Acme\Operators();
$cycle = new App\Acme\Cycle();
$get = new App\Acme\Get();
$post = new App\Acme\Post();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Docker <?php echo $foo->getName(); ?></title>
    <link rel="stylesheet/less" type="text/css" href="styles.less"/>
</head>
<body>
<div class="items">
    <div class="item">
        <h3>Get URL:</h3>
        <div><?= $get->getUrl(); ?></div>
    </div>
    <div class="item">
        <h3>Input your name</h3>
        <form>
            <input type="text" name="userName">
            <input type="submit" name="">
        </form>
        <p class="hello-user-name"><?= $get->getHelloUserName(); ?></p>
    </div>
    <div class="item">
        <h3>Input your number</h3>
        <p><?= $get->getMessage(); ?></p>
        <form>
            <input type="text" name="numberEvenOdd" type="number">
            <input type="submit" name="">
        </form>
    </div>
    <div class="item">
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
<!--scripts-->
<!--TODO: dont work FIX => -->
<script src="less.js"></script>
<script src="js/app.js" type="module"></script>
</body>
</html>

