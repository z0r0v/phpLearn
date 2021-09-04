<?php

/**
 * I belong to a file
 */

namespace App\Acme;

/**
 * I belong to a class
 */
class Cycle
{

    /**
     * Gets the name of the application.
     */

    public $colors = array('red', 'orange', 'yellow', 'green', 'violet');

    public function getCycle()
    {
        for ($i = 0; $i <= sizeof($this->colors); $i++) {
            echo $this->colors[$i] . " ";
        }
    }


    public function getTemplateColors()
    {
        foreach ($this->colors as $key => $value) {
            echo '<div style="background:' . $value . '; width: 50px; height: 50px;"><span>' . $key . '</span> </div>';
        }
    }

    public function getWhile()
    {
        $i = 0;

        while ($i <= 10) {
            $a = $i * 7;
            echo $a . " ";
            $i++;
        }

        echo '</br></br>';

        $j = 0;

        while ($j <= count($this->colors)) {

            echo $this->colors[$j] . "</br>";

            $j++;
        }

    }
}
