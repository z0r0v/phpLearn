<?php

include '../app/vendor/autoload.php';

$foo = new App\Acme\Foo();
$start = new App\Acme\Start();
$isUserlogin = new App\Acme\Isuserlogin();
$operators = new App\Acme\Operators();
$cycle = new App\Acme\Cycle();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Docker <?php echo $foo->getName(); ?></title>
</head>
<body>
    <p>Get name:</p>
    <h1>Docker <?php echo $foo->getName(); ?></h1>
    <p>Start:</p>
    <div><?php echo $start->getVariableArray(); ?></div>
    <p>Is user login:</p>
    <div><?php echo $isUserlogin->isUserLogin(); ?></div>

    <p>Operators:</p>
    <div><?= $operators->getOperators(); ?></div>

    <p>Cycle:</p>
    <div><?= $cycle->getCycle(); ?></div>
    <div>
        <?= $cycle->getTemplateColors() ?>
    </div>
</body>
</html>

