<?php


namespace App\Acme;

/**
 * Class Counter
 * @package App\Acme
 */
class Counter
{
    /**
     * @param int $a
     * @return int
     */
    public function getCounterNumber(int $a): int
    {
        return ++$a;
    }
}
