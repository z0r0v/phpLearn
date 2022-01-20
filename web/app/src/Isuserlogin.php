<?php

/**
 * I belong to a file
 */

namespace App\Acme;

/**
 * I belong to a class
 */
class Isuserlogin
{
    /**
     * Gets the name of the application.
     */
    public function isUserLogin()
    {
        $userName = 'Joe';
        $isUserLogin = true;
        $userAge = 15;

        if ($isUserLogin && $userAge > 18) {
            echo "Hello  " . $userName;
        } else {
            echo "You have to login and you have to be older 18";
        }

    }
}
