<?php

namespace App\Acme;

/**
 * Class AnInclude
 * @package App\Acme
 */
class AnInclude
{
    /**
     * @return string
     */
    public function getInclude()
    {
        include('another/anotherFile.php');
    }

    /**
     * @return string
     */
    public function getFileContents()
    {
        return file_get_contents('https://aliakseizhorau.web.app/');
    }
}