<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 02.10.18
 * Time: 13:16
 */

namespace App\Services\HTTPClient;


use App\Contract\HTTPClientInterface;
use Vinelab\Http\Facades\Client as HttpClient;


class VinelabHTTPClient implements HTTPClientInterface
{
    /**
     * @param string $url
     * @return int
     */
    public function getStatusCode(string $url)
    {
        return HttpClient::get(['url' => $url])->StatusCode();
    }
}