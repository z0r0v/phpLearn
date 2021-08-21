<?php

/**
 * I belong to a file
 */

namespace App\Acme;

/**
 * I belong to a class
 */
class Start
{
    /**
     * Gets the name of the application.
     */
    public function getVariableArray()
    {
        echo "Helo World</br>";

        $name = 'John';

        echo "My name is: $name </br>";

        $lastName = "Black";
        echo $name . " " . $lastName;

        $x = 23;
        $y = 12;

        $sum = $x + $y;

        echo "<p>$x + $y</p>";
        echo "<p>$sum</p>";

        $bool = false;
        echo "<p>$bool</p>";

        $variavleName = "lastName";
        echo "lastName: " . $$variavleName;
        echo "</br>" ;

        $colors = array("red", "orange", "blue", "green");
        $colors[] = 'yelow';

        print_r($colors);

        echo "</br>" . $colors[1];
        echo "</br>" ;

        $names[0] = "Jane";
        $names[1] = "Jake";
        $names[3] = "Jim";
        $names[5] = "Jim";
        $names["name"] = "Rim";

        echo "names: ";
        print_r($names);

        unset($names[5]);
        echo "</br>";
        echo "unset: ";
        print_r($names);
        echo "</br>";
        echo "sizeof: " . sizeof($names);

        echo "</br>";

        echo $names["name"];

        $years["jane"] = 1999;
        $years["jare"] = 1989;
        $years["jim"] = 2009;

        echo "</br>";

        print_r($years);


    }
}
