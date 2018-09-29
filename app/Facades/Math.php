<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 29.09.18
 * Time: 10:58
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class Math extends Facade
{
    protected static function getFacadeAccessor()
    {
        //parent::getFacadeAccessor(); // TODO: Change the autogenerated stub
        return 'math';
    }
}