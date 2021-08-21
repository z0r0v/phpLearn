<?php

include '../app/vendor/autoload.php';

$foo = new App\Acme\Foo();
$start = new App\Acme\Start();
$isuserlogin = new App\Acme\Isuserlogin();

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
        <div><?php echo $isuserlogin->isUserLogin(); ?></div>
    </body>
</html>

