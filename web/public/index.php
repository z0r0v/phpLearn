<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();
echo "Helo World"

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Docker <?php echo $foo->getName(); ?></title>
    </head>
    <body>
        <h1>Docker <?php echo $foo->getName(); ?></h1>
        <p>wroom wrroom</p>
    </body>
</html>

