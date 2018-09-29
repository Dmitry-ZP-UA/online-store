<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 10:47
 */

namespace App\Services;


use App\Contracts\CalculateInterface;

class Calculator implements CalculateInterface
{
    public function add($first, $second)
    {
        return $first + $second;
    }
}