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


    public function getCycle()
    {
        $colors = $this->getColors();
        for ($i = 0; $i <= sizeof($colors); $i++) {
            echo $colors[$i] . " ";
        }
    }

    public function getColors()
    {
        $colors = array('red', 'orange', 'yellow', 'green', 'violet');

        return $colors;
    }

    public function getTemplateColors() {
        $colors = $this->getColors();

        foreach ($colors as $key => $value) {
            echo '<div style="background:' . $value . '; width: 50px; height: 50px;"><span>' . $key . '</span> </div>';
        }
    }
}
