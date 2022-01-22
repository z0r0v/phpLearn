<?php

namespace App\Acme;

/**
 * Class AnInclude
 * @package App\Acme
 */
class AnInclude
{
    public const URL = 'https://aliakseizhorau.web.app/';
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
    //        TODO: type
    public function getFileContents()
    {
//        TODO: why nests all containers from below?
//        return file_get_contents(self::URL);
        return '';
    }
}