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
    public function getUrl()
    {
        print_r($_GET);
    }


    public function getHelloUserName()
    {
        echo 'Hello ' . $_GET['userName'] . '!';
    }

    public function getTextAfterCheckNuberOddEven($number)
    {
        ($number % 2 === 0) ? $text = ' - Number is Even' : $text = ' - Number is Odd';

        return $text;
    }

    public function getMessage()
    {
        $number = $_GET['numberEvenOdd'];

        if ($number) {

            if (floor($number) == $number && is_numeric($number)) {

                $text = $this->getTextAfterCheckNuberOddEven($number);

                return $number . $text;
            } else {
                return $number . " - Number don't integer or not a Number";
            }

        } else {
            return 'Send number';
        }
    }
}
