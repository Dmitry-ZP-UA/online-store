<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 02.10.18
 * Time: 13:12
 */

namespace App\Contract;


interface HTTPClientInterface
{
    public function getStatusCode(string $url);
}