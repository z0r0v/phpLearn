<?php

/**
 * I belong to a file
 */

namespace App\Acme;

/**
 * I belong to a class
 */
class Get
{
    public function getGet()
    {

//        /?userName=Jon&page=mainPage

        print_r($_GET);
        echo '</br></br>';
        echo $_GET['userName'];
        echo '</br></br>';
        echo $_GET['page'];
    }

    public function getUrl()
    {
        echo 'Hello ' . $_GET['userName'] . '!';
    }

    public function СheckNumberOddEven()
    {
        $number = $_GET['numberEvenOdd'];

        $text = '';

        ($number % 2 === 0) ? $text = ' - even' : $text = ' - odd';

        if ($number) {
            return $number . $text;
        }
    }
}
