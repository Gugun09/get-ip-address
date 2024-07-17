<?php

namespace Gugun09\Ip;

use GuzzleHttp\Client;

class IpAddress
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getInfo($ip)
    {
        $response = $this->client->request('GET', "https://ipinfo.io/{$ip}/json");
        return json_decode($response->getBody()->getContents(), true);
    }
}
