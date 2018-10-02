<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 02.10.18
 * Time: 13:16
 */

namespace App\Services\HTTPClient;


use App\Contract\HTTPClientInterface;

class GuzzleHTTPClient implements HTTPClientInterface
{
    /**
     * @param string $url
     * @return int
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getStatusCode(string $url)
    {
        $client = new \GuzzleHttp\Client(['http_errors' => false]);

        return $client->request('GET', $url)->getStatusCode();
    }
}