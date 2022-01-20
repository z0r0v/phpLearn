<?php

/**
 * I belong to a file
 */

namespace App\Acme;

/**
 * I belong to a class
 */
class Operators
{
    /**
     * Gets the name of the application.
     */
    public function getOperators()
    {
        $userName = 'Joe';
        $isUserLogin = true;
        $userAge = 18;

        if ($isUserLogin && $userAge >= 18) {
            return 'Hello'. ' ' . $userName;
        } else {
            return "You have to login and you have to be older than 18";
        }
    }
}
